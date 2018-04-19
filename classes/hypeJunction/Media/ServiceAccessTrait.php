<?php

namespace hypeJunction\Media;

use hypeJunction\Scraper\ScraperService;
use hypeJunction\Trees\TreeService;

trait ServiceAccessTrait {

	/**
	 * Get collections service instance
	 * @return MediaCollectionsService
	 */
	public function _collections() {
		return elgg()->{'media.collections'};
	}

	/**
	 * Get trees service
	 * @return TreeService
	 */
	public function _trees() {
		return elgg()->trees;
	}

	/**
	 * Get scraper service
	 * @return ScraperService
	 */
	public function _scraper() {
		return elgg()->scraper;
	}

}