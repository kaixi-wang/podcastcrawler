<?php
/**
 *  This file is part of the Podcast Crawler package.
 *
 *  Copyright (c) 2016 Dorian Neto
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace PodcastCrawler;

/**
 * Interface Podcastcrawler\ProviderInterface
 *
 * @version   v1.0.0
 * @link      https://github.com/podcastcrawler/podcastcrawler
 * @license   https://github.com/podcastcrawler/podcastcrawler/blob/master/LICENSE.md MIT
 * @copyright 2016 Podcast Crawler
 * @author    Dorian Neto <doriansampaioneto@gmail.com>
 */
interface ProviderInterface
{
    /**
     * Generate an URL to enable the searching
     *
     * @param  string $value Can be a term, ID etc
     * @return string
     */
    public function generateUrl($value);

    /**
     * Structuring the response from API through the search
     *
     * @param  array $response Response from API
     * @return array
     */
    public function build(array $response);
}