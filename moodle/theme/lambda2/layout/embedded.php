<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_lambda2
 * @copyright 2025 redPIthemes
 *
 */

defined('MOODLE_INTERNAL') || die();

$extraclasses = [];
$extraclasses[] = 'lambda';
$extraclasses[] = theme_lambda2_get_moodle_version();

$bodyattributes = $OUTPUT->body_attributes($extraclasses);

$fakeblockshtml = $OUTPUT->blocks('side-pre', array(), 'aside', true);
$hasfakeblocks = strpos($fakeblockshtml, 'data-block="_fake"') !== false;

$templatecontext = [
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes,
    'hasfakeblocks' => $hasfakeblocks,
    'fakeblocks' => $fakeblockshtml,
];

$PAGE->requires->jquery();

echo $OUTPUT->render_from_template('theme_lambda2/embedded', $templatecontext);
