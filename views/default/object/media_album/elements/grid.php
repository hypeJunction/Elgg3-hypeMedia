<?php

$entity = elgg_extract('entity', $vars);
if (!$entity instanceof \hypeJunction\Media\MediaCollection) {
	return;
}

$limit = elgg_extract('limit', $vars, 12);

$collection = $entity->getMedia();

$count = $collection->getList()->count();

if (!$count) {
	if ($entity->canWriteToContainer()) {
		echo elgg_view('input/media/upload', $vars);
	}

	return;
}

$items = $collection->getList()->batch($limit);

$thumbs = '';

foreach ($items as $item) {
	$thumbs .= elgg_view('media/thumb', [
		'entity' => $item,
		'album' => $entity,
	]);
}

if ($limit && $count > $limit) {
	$more = $count - $limit;
	$link = elgg_view('output/url', [
		'href' => $entity->getURL(),
		'text' => "+{$more}",
	]);

	$thumbs .= elgg_format_element('div',[
		'class' => 'media-album-item media-album-more',
	], $link);
}

echo elgg_format_element('div', [
	'class' => 'media-album-grid',
], $thumbs);
