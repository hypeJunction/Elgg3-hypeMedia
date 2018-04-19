<?php

namespace hypeJunction\Media;

use Elgg\PluginBootstrap;
use Elgg\Values;

class Bootstrap extends PluginBootstrap {

	/**
	 * Executed during 'plugins_boot:before', 'system' event
	 *
	 * Allows the plugin to require additional files, as well as configure services prior to booting the plugin
	 *
	 * @return void
	 */
	public function load() {

	}

	/**
	 * Executed during 'plugins_boot:before', 'system' event
	 *
	 * Allows the plugin to register handlers for 'plugins_boot', 'system' and 'init', 'system' events,
	 * as well as implement boot time logic
	 *
	 * @return void
	 */
	public function boot() {

	}

	/**
	 * Executed during 'init', 'system' event
	 *
	 * Allows the plugin to implement business logic and register all other handlers
	 *
	 * @return void
	 */
	public function init() {
		MediaCollectionsService::instance()->register('media_album', [
			'media_file',
			'media_import',
		]);

		elgg_register_collection('collection:object:media_album:all', DefaultAlbumCollection::class);
		elgg_register_collection('collection:object:media_album:owner', OwnedAlbumCollection::class);
		elgg_register_collection('collection:object:media_album:friends', FriendsAlbumCollection::class);
		elgg_register_collection('collection:object:media_album:group', GroupAlbumCollection::class);

		elgg_register_collection('collection:media:owner', OwnedMediaCollection::class);
		elgg_register_collection('collection:media:group', GroupMediaCollection::class);
		elgg_register_collection('collection:media:album', AlbumMediaCollection::class);

		elgg_register_event_handler('create', 'object', ConvertUploadedMedia::class);
		elgg_register_event_handler('update:after', 'object', ConvertUploadedMedia::class);

		elgg_register_event_handler('create', 'object', ExtractExifTags::class);

		elgg_register_plugin_hook_handler('fields', 'object', SetObjectFields::class, 800);

		elgg_register_plugin_hook_handler('uses:location', 'object:media_album', [Values::class, 'getTrue']);
		elgg_register_plugin_hook_handler('uses:river', 'object:media_album', [Values::class, 'getTrue']);
		elgg_register_plugin_hook_handler('uses:autosave', 'object:media_album', [Values::class, 'getFalse']);

		elgg_register_plugin_hook_handler('uses:location', 'object:media_file', [Values::class, 'getTrue']);

		elgg_register_plugin_hook_handler('uses:web_location', 'object:media_import', [Values::class, 'getTrue']);

		elgg_register_plugin_hook_handler('likes:is_likable', 'object:media_album', [Values::class, 'getTrue']);
		elgg_register_plugin_hook_handler('likes:is_likable', 'object:media_file', [Values::class, 'getTrue']);
		elgg_register_plugin_hook_handler('likes:is_likable', 'object:media_import', [Values::class, 'getTrue']);

		elgg_register_plugin_hook_handler('register', 'menu:entity', EntityMenu::class);
		elgg_register_plugin_hook_handler('register', 'menu:title', TitleMenu::class);
		elgg_register_plugin_hook_handler('register','menu:owner_block', OwnerBlockMenu::class);

		elgg_register_menu_item('site', [
			'name' => 'albums',
			'text' => elgg_echo('collection:object:media_album:all'),
			'href' => elgg_generate_url('collection:object:media_album:all'),
			'icon' => 'images',
		]);

		elgg_register_event_handler('create', 'object', SyncMediaFiles::class);

		elgg_register_event_handler('update', 'object', SyncMediaObjects::class);
		elgg_register_event_handler('publish', 'object', SyncMediaObjects::class);
		elgg_register_event_handler('unpublish', 'object', SyncMediaObjects::class);

		elgg_register_plugin_hook_handler('modules', 'object', AddMediaModules::class);

		elgg_extend_view('elgg.css', 'media/media.css');
		elgg_extend_view('elgg.css', 'slick/slick.css');
		elgg_extend_view('elgg.css', 'slick/slick-theme.css');
		elgg_extend_view('elgg.css', 'videojs/video-js.min.css');

		elgg_define_js('slick', [
			'src' => elgg_get_simplecache_url('slick/slick.min.js'),
			'deps' => ['jquery'],
		]);

		elgg_define_js('videojs', [
			'src' => elgg_get_simplecache_url('videojs/video.min.js'),
		]);

		add_group_tool_option('media');
		elgg_extend_view('groups/tool_latest', 'media/group_module');
	}

	/**
	 * Executed during 'ready', 'system' event
	 *
	 * Allows the plugin to implement logic after all plugins are initialized
	 *
	 * @return void
	 */
	public function ready() {

	}

	/**
	 * Executed during 'shutdown', 'system' event
	 *
	 * Allows the plugin to implement logic during shutdown
	 *
	 * @return void
	 */
	public function shutdown() {
	}

	/**
	 * Executed when plugin is activated, after 'activate', 'plugin' event and before activate.php is included
	 *
	 * @return void
	 */
	public function activate() {
	}

	/**
	 * Executed when plugin is deactivated, after 'deactivate', 'plugin' event and before deactivate.php is included
	 *
	 * @return void
	 */
	public function deactivate() {
	}

	/**
	 * Registered as handler for 'upgrade', 'system' event
	 *
	 * Allows the plugin to implement logic during system upgrade
	 *
	 * @return void
	 */
	public function upgrade() {

	}
}