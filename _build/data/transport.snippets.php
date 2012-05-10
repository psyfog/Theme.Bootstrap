<?php
/**
 * Theme.Bootstrap
 *
 * Copyright 2010 by Shaun McCormick <shaun+themebootstrap@modx.com>
 *
 * Theme.Bootstrap is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Theme.Bootstrap is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Theme.Bootstrap; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package themebootstrap
 */
/**
 * Add snippets to build
 * 
 * @package themebootstrap
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'Theme.Bootstrap',
    'description' => 'Displays Items.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.themebootstrap.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.themebootstrap.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;