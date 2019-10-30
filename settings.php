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
 * Theme Boost ead - Settings file
 *
 * @package    theme_ead
 * @copyright  2017 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Create settings page with tabs.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingead',
        get_string('configtitle', 'theme_ead', null, true));


    // Create general tab.
    $page = new admin_settingpage('theme_ead_general', get_string('generalsettings', 'theme_boost', null, true));

    // Settings title to group preset related settings together with a common heading. We don't want a description here.
    $name = 'theme_ead/presetheading';
    $title = get_string('presetheadingsetting', 'theme_ead', null, true);
    $setting = new admin_setting_heading($name, $title, null);
    $page->add($setting);

    // Replicate the preset setting from theme_boost.
    $name = 'theme_ead/preset';
    $title = get_string('preset', 'theme_boost', null, true);
    $description = get_string('preset_desc', 'theme_boost', null, true);
    
    // We list files in our own file area to add to the drop down. We will provide our own function to
    // load all the presets from the correct paths.
    $default = 'abacate.scss';
    $choices = [];
    $choices['abacate.scss'] = 'Verde - Abacate';
    // $choices['alface.scss'] = 'Verde - Alface';
    // $choices['oliva.scss'] = 'Verde - Oliva';
    // $choices['alto-contraste-claro.scss'] = 'Alto contrate - claro';
    // $choices['alto-contraste-escuro.scss'] = 'Alto contrate - escuro';
    // $choices['anil.scss'] = 'Azul - Anil';
    // $choices['safira.scss'] = 'Azul - Safira';
    // $choices['ipe.scss'] = 'Vívido - Ipê';
    // $choices['jerimum.scss'] = 'Vívido - Jerimum';
    $choices['solar.scss'] = 'Vívido - Solar';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // // Preset files setting.
    // $name = 'theme_ead/presetfiles';
    // $title = get_string('presetfiles', 'theme_boost', null, true);
    // $description = get_string('presetfiles_desc', 'theme_boost', null, true);

    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
    //     array('maxfiles' => 20, 'accepted_types' => array('.scss')));
    // $page->add($setting);

    // // Settings title to group brand color related settings together with a common heading. We don't want a description here.
    // $name = 'theme_ead/brandcolorheading';
    // $title = get_string('brandcolorheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Variable $brand-color.
    // // We use an empty default value because the default colour should come from the preset.
    // $name = 'theme_ead/brandcolor';
    // $title = get_string('brandcolor', 'theme_boost', null, true);
    // $description = get_string('brandcolor_desc', 'theme_boost', null, true);
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Variable $brand-succes-color.
    // $name = 'theme_ead/brandsuccesscolor';
    // $title = get_string('brandsuccesscolorsetting', 'theme_ead', null, true);
    // $description = get_string('brandsuccesscolorsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Variable $brand-info-color.
    // $name = 'theme_ead/brandinfocolor';
    // $title = get_string('brandinfocolorsetting', 'theme_ead', null, true);
    // $description = get_string('brandinfocolorsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Variable $brand-warning-color.
    // $name = 'theme_ead/brandwarningcolor';
    // $title = get_string('brandwarningcolorsetting', 'theme_ead', null, true);
    // $description = get_string('brandwarningcolorsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Variable $brand-warning-color.
    // $name = 'theme_ead/branddangercolor';
    // $title = get_string('branddangercolorsetting', 'theme_ead', null, true);
    // $description = get_string('branddangercolorsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // Settings title to group favicon related settings together with a common heading. We don't want a description here.
    $name = 'theme_ead/faviconheading';
    $title = get_string('faviconheadingsetting', 'theme_ead', null, true);
    $setting = new admin_setting_heading($name, $title, null);
    $page->add($setting);

    // Favicon upload.
    $name = 'theme_ead/favicon';
    $title = get_string('faviconsetting', 'theme_ead', null, true);
    $description = get_string('faviconsetting_desc', 'theme_ead', null, true);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon', 0,
        array('maxfiles' => 1, 'accepted_types' => array('.ico', '.png')));
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // // Add tab to settings page.
    // $settings->add($page);


    // // Create advanced settings tab.
    // $page = new admin_settingpage('theme_ead_advanced', get_string('advancedsettings', 'theme_boost', null, true));

    // // Raw SCSS to include before the content.
    // $name = 'theme_ead/scsspre';
    // $title = get_string('rawscsspre', 'theme_boost', null, true);
    // $description = get_string('rawscsspre_desc', 'theme_boost', null, true);
    // $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Raw SCSS to include after the content.
    // $name = 'theme_ead/scss';
    // $title = get_string('rawscss', 'theme_boost', null, true);
    // $description = get_string('rawscss_desc', 'theme_boost', null, true);
    // $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title for the catching keybaord commands.
    // $name = 'theme_ead/catchkeyboardcommandsheading';
    // $title = get_string('catchkeyboardcommandsheadingsetting', 'theme_ead', null, true);
    // $description = get_string('catchkeyboardcommandsheadingsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, $description);
    // $page->add($setting);

    // // Setting for catching the end key.
    // $name = 'theme_ead/catchendkey';
    // $title = get_string('catchendkeysetting', 'theme_ead', null, true);
    // $description = get_string('catchendkeysetting_desc', 'theme_ead', null, true) . ' ' .
    //     get_string('catchkeys_desc_addition', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting for catching the cmd + arrow down keys.
    // $name = 'theme_ead/catchcmdarrowdown';
    // $title = get_string('catchcmdarrowdownsetting', 'theme_ead', null, true);
    // $description = get_string('catchcmdarrowdownsetting_desc', 'theme_ead', null, true) . ' ' .
    //     get_string('catchkeys_desc_addition', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting for catching the strg + arrow down keys.
    // $name = 'theme_ead/catchctrlarrowdown';
    // $title = get_string('catchctrlarrowdownsetting', 'theme_ead', null, true);
    // $description = get_string('catchctrlarrowdownsetting_desc', 'theme_ead', null, true) . ' ' .
    //     get_string('catchkeys_desc_addition', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Add tab to settings page.
    // $settings->add($page);


    // // Create course layout settings tab.
    // $name = 'theme_ead_courselayout';
    // $title = get_string('courselayoutsettings', 'theme_ead', null, true);
    // $page = new admin_settingpage($name, $title);

    // // Setting for displaying section-0 title in courses.
    // $name = 'theme_ead/section0title';
    // $title = get_string('section0titlesetting', 'theme_ead', null, true);
    // $description = get_string('section0titlesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting for displaying edit on / off button addionally in course header.
    // $name = 'theme_ead/courseeditbutton';
    // $title = get_string('courseeditbuttonsetting', 'theme_ead', null, true);
    // $description = get_string('courseeditbuttonsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting to display information of a switched role in the course header.
    // $name = 'theme_ead/showswitchedroleincourse';
    // $title = get_string('showswitchedroleincoursesetting', 'theme_ead', null, true);
    // $description = get_string('showswitchedroleincoursesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php).
    //     // Default 0 value would not write the variable to scss that could cause the scss to crash if used in that file.
    //     // See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title for grouping course settings related aspects together. We don't need a description here.
    // $name = 'theme_ead/coursesettingsheading';
    // $title = get_string('coursesettingsheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Setting to display the course settings page as a panel within the course.
    // $name = 'theme_ead/showsettingsincourse';
    // $title = get_string('showsettingsincoursesetting', 'theme_ead', null, true);
    // $description = get_string('showsettingsincoursesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    // // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php).
    // // Default 0 value would not write the variable to scss that could cause the scss to crash if used in that file.
    // // See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting to display the switch role to link as a separate tab within the in-course settings panel.
    // $name = 'theme_ead/incoursesettingsswitchtorole';
    // $title = get_string('incoursesettingsswitchtorolesetting', 'theme_ead', null, true);
    // $description = get_string('incoursesettingsswitchtorolesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    // // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php).
    // // Default 0 value would not write the variable to scss that could cause the scss to crash if used in that file.
    // // See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Add tab to settings page.
    // $settings->add($page);


    // // Create footer layout settings tab.
    // $name = 'theme_ead_footerlayout';
    // $title = get_string('footerlayoutsettings', 'theme_ead', null, true);
    // $page = new admin_settingpage($name, $title);

    // // Settings title for the footer blocks. We don't need a description here.
    // $name = 'theme_ead/footerblocksheading';
    // $title = get_string('footerblocksheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Setting for enabling blocks with different layouts in the footer.
    // $name = 'theme_ead/footerblocks';
    // $title = get_string('footerblockssetting', 'theme_ead', null, true);
    // $description = get_string('footerblockssetting_desc', 'theme_ead', null, true);
    // $footerlayoutoptions = [
    //  // Don't use string lazy loading (= false) because the string will be directly used and would produce a PHP warning otherwise.
    // '0columns' => get_string('footerblocks0columnssetting', 'theme_ead', null, false),
    // '1columns' => get_string('footerblocks1columnssetting', 'theme_ead', null, true),
    // '2columns' => get_string('footerblocks2columnssetting', 'theme_ead', null, true),
    // '3columns' => get_string('footerblocks3columnssetting', 'theme_ead', null, true)
    // ];
    // $setting = new admin_setting_configselect($name, $title, $description, $footerlayoutoptions['0columns'], $footerlayoutoptions);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title to group the settings footerhelplink, footerlogininfo and footerhomelink together with a common description.
    // $name = 'theme_ead/footerlinksheading';
    // $title = get_string('footerlinksheadingsetting', 'theme_ead', null, true);
    // $description = get_string('footerlinksheadingsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, $description);
    // $page->add($setting);

    // // Helplink.
    // $name = 'theme_ead/footerhidehelplink';
    // $title = get_string('footerhidehelplinksetting', 'theme_ead', null, true);
    // $description = get_string('footerlinks_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Logininfo.
    // $name = 'theme_ead/footerhidelogininfo';
    // $title = get_string('footerhidelogininfosetting', 'theme_ead', null, true);
    // $description = get_string('footerlinks_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Homelink.
    // $name = 'theme_ead/footerhidehomelink';
    // $title = get_string('footerhidehomelinksetting', 'theme_ead', null, true);
    // $description = get_string('footerlinks_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Add tab to settings page.
    // $settings->add($page);


    // // Create additional layout settings tab.
    // $name = 'theme_ead_additionallayout';
    // $title = get_string('additionallayoutsettings', 'theme_ead', null, true);
    // $page = new admin_settingpage($name, $title);

    // // Settings title to group image area settings together with a common heading and description.
    // $name = 'theme_ead/imageareaheading';
    // $title = get_string('imageareaheadingsetting', 'theme_ead', null, true);
    // $description = get_string('imageareaheadingsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, $description);
    // $page->add($setting);

    // // Image area setting.
    // $name = 'theme_ead/imageareaitems';
    // $title = get_string('imageareaitemssetting', 'theme_ead', null, true);
    // $description = get_string('imageareaitemssetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'imageareaitems', 0, array('maxfiles' => 100,
    //     'accepted_types' => array('web_image'), 'subdirs' => 0));
    // $setting->set_updatedcallback('theme_ead_reset_app_cache');
    // $page->add($setting);

    // $name = 'theme_ead/imageareaitemslink';
    // $title = get_string('imageareaitemslinksetting', 'theme_ead', null, true);
    // $description = get_string('imageareaitemslinksetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configtextarea($name, $title, $description, null, PARAM_TEXT);
    // $setting->set_updatedcallback('theme_ead_reset_app_cache');
    // $page->add($setting);

    // $name = 'theme_ead/imageareaitemsmaxheight';
    // $title = get_string('imageareaitemsmaxheightsetting', 'theme_ead', null, true);
    // $description = get_string('imageareaitemsmaxheightsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, 100, PARAM_INT, null, 3);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title to group footnote settings together with a common heading and description.
    // $name = 'theme_ead/footnoteheading';
    // $title = get_string('footnoteheadingsetting', 'theme_ead', null, true);
    // $description = get_string('footnoteheadingsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, $description);
    // $page->add($setting);

    // // Footnote setting.
    // $name = 'theme_ead/footnote';
    // $title = get_string('footnotesetting', 'theme_ead', null, true);
    // $description = get_string('footnotesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title to group navdrawer related settings together with a common heading. We don't want a description here.
    // $setting = new admin_setting_heading('theme_ead/navdrawerheading',
    //     get_string('navdrawerheadingsetting', 'theme_ead', null, true), null);
    // $page->add($setting);

    // // Create default homepage on top control widget
    // // (switch label and description depending on what will really happens on the site).
    // if (get_config('core', 'defaulthomepage') == HOMEPAGE_SITE) {
    //     $page->add(new admin_setting_configcheckbox('theme_ead/defaulthomepageontop',
    //         get_string('sitehomeontopsetting', 'theme_ead', null, true),
    //         get_string('sitehomeontopsetting_desc', 'theme_ead', null, true), 'no', 'yes', 'no'));
    //         // Overriding default values yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss()
    //         // (lib.php). Default 0 value would not write the variable to scss that could cause the scss to crash if used in
    //         // that file. See MDL-58376.
    // } else if (get_config('core', 'defaulthomepage') == HOMEPAGE_MY) {
    //     $page->add(new admin_setting_configcheckbox('theme_ead/defaulthomepageontop',
    //         get_string('dashboardontopsetting', 'theme_ead', null, true),
    //         get_string('dashboardontopsetting_desc', 'theme_ead', null, true), 'no', 'yes', 'no'));
    //         // Overriding default values yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss()
    //         // (lib.php). Default 0 value would not write the variable to scss that could cause the scss to crash if used in
    //         // that file. See MDL-58376.
    // } else if (get_config('core', 'defaulthomepage') == HOMEPAGE_USER) {
    //     $page->add(new admin_setting_configcheckbox('theme_ead/defaulthomepageontop',
    //         get_string('userdefinedontopsetting', 'theme_ead', null, true),
    //         get_string('userdefinedontopsetting_desc', 'theme_ead', null, true), 'no', 'yes', 'no'));
    //         // Overriding default values yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss()
    //         // (lib.php). Default 0 value would not write the variable to scss that could cause the scss to crash if used in
    //         // that file. See MDL-58376.
    // } else { // This should not happen.
    //     $page->add(new admin_setting_configcheckbox('theme_ead/defaulthomepageontop',
    //         get_string('defaulthomepageontopsetting', 'theme_ead', null, true),
    //         get_string('defaulthomepageontopsetting_desc', 'theme_ead', null, true), 'no', 'yes', 'no'));
    //         // Overriding default values yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss()
    //         // (lib.php). Default 0 value would not write the variable to scss that could cause the scss to crash if used in
    //         // that file. See MDL-58376.
    // }

    // // Add tab to settings page.
    // $settings->add($page);


    //  // Create design settings tab.
    // $page = new admin_settingpage('theme_ead_design', get_string('designsettings', 'theme_ead', null, true));

    // // Settings title to group login page related settings together with a common heading. We don't want a description here.
    // $name = 'theme_ead/loginpagedesignheading';
    // $title = get_string('loginpagedesignheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Login page background setting.
    // $name = 'theme_ead/loginbackgroundimage';
    // $title = get_string('loginbackgroundimagesetting', 'theme_ead', null, true);
    // $description = get_string('loginbackgroundimagesetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage', 0,
    //     array('maxfiles' => 10, 'accepted_types' => 'web_image'));
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Setting to change the position and design of the login form.
    // $name = 'theme_ead/loginform';
    // $title = get_string('loginform', 'theme_ead', null, true);
    // $description = get_string('loginform_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title to group font related settings together with a common heading. We don't want a description here.
    // $name = 'theme_ead/fontdesignheading';
    // $title = get_string('fontdesignheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Font files upload.
    // $name = 'theme_ead/fontfiles';
    // $title = get_string('fontfilessetting', 'theme_ead', null, true);
    // $description = get_string('fontfilessetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'fontfiles', 0,
    //         array('maxfiles' => 100, 'accepted_types' => array('.ttf', '.eot', '.woff', '.woff2')));
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // // Settings title to group block related settings together with a common heading. We don't want a description here.
    // $name = 'theme_ead/blockdesignheading';
    // $title = get_string('blockdesignheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // // Setting for displaying a standard Font Awesome icon in front of the block title.
    // $name = 'theme_ead/blockicon';
    // $title = get_string('blockiconsetting', 'theme_ead', null, true);
    // $description = get_string('blockiconsetting_desc', 'theme_ead', null, true) .
    //     get_string('blockiconsetting_desc_code', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no'); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    //     $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    //  // Settings title to group navbar related settings together with a common heading. We don't want a description here.
    // $name = 'theme_ead/navbardesignheading';
    // $title = get_string('navbardesignheadingsetting', 'theme_ead', null, true);
    // $setting = new admin_setting_heading($name, $title, null);
    // $page->add($setting);

    // $name = 'theme_ead/darknavbar';
    // $title = get_string('darknavbarsetting', 'theme_ead', null, true);
    // $description = get_string('darknavbarsetting_desc', 'theme_ead', null, true);
    // $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    //     // yes = 1 and no = 0 because of the use of empty() in theme_ead_get_pre_scss() (lib.php). Default 0 value would
    //     // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // Add tab to settings page.
    $settings->add($page);

}
