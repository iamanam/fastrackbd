=== Note - A live edit text widget ===
Contributors: slocumstudio
Donate link: 
Tags: note, widget, customizer, live edit, wysiwyg, text, text widget, plugin, sidebar
Requires at least: 4.3
Tested up to: 4.5
Stable tag: 1.4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Note is a simple and easy to use widget for editing bits of text, live, in your WordPress front-end Customizer.


== Description ==

Note is a simple and easy to use widget for editing bits of text, live, in your WordPress front-end Customizer. Add Notes into any sidebar to visualize how your copy will appear within the unique layout and design of your website. 

With Note, there's no more painful back and forth from the WordPress dashboard to the front-end of your site to refresh. Simply add your Note widget into a sidebar and begin typing. It's that easy.

Note is brought to you by the team at [Conductor Plugin](https://conductorplugin.com/). We're making content layout and display a cinch with [Conductor](https://conductorplugin.com/).

https://vimeo.com/130115355

**Features**

* Fast & lightweight
* Live front-end Customizer support
* Live text editing in a widget
* Apply common text styles to your copy
* Create links using the WordPress pop-up modal
* Works in any WordPress sidebar
* Visualize the right look & feel of your copy without guessing

[View Note on Github](https://github.com/sdsweb/note/) | [Issue Tracker](https://github.com/sdsweb/note/issues/)


== Installation ==

1. Upload Note to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. A Note widget is now available for use in the Customizer


== Frequently Asked Questions ==

= How do I add text to the widget? =

You must be in the front-end Customizer of your WordPress website. Once you're there, add the Note widget under sidebar settings.

= Why can't I type text in the admin screen? =

Note was created so you could visualize the look & feel of your copy in the context of your website's design. The best way to experience Note is - do it live.

= When will you support other features in Note? =

We're happy to take your feedback at [https://conductorplugin.com/contact/](https://conductorplugin.com/contact/).


== Screenshots ==
1. Note Widget UI in the Customizer
2. Creating a Note widget in the Customizer

See the video in our [Description](https://wordpress.org/plugins/note/) for a live demo.


== Changelog ==

= 1.4.0 // April 13 2016 =
* General
  * Removed specific backwards compatibility logic for WordPress 4.0 and lower
* Note Widget
  * Refactored Note TinyMCE theme logic (organized code, adjusted logic to show/hide panel/toolbars)
  * Fixed a bug where TinyMCE menus would remain open after the Note TinyMCE panel was hidden
  * Removed unnecessary assets in favor of using WordPress' assets ('wplink', 'wpview', 'lists', and 'media' TinyMCE plugins)
  * Adjusted 'wplink' TinyMCE plugin CSS to be compatible with WordPress 4.5
  * Added loading image from WordPress for TinyMCE 'wplink' plugin input field
  * Added logic to attempt to focus the active TinyMCE editor before the media modal appeared when inserting an image
  * Utilize WordPress functionality to create TinyMCE toolbars (editor.wp._createToolbar())
* Note Flexbox
  * Adjusted Note Flexbox CSS to ensure better cross-browser compatibility

= 1.3.1 // December 11 2015 =
* Fixed a bug in WordPress 4.4+ where data sent from the Previewer (TinyMCE editor) to the Customizer (Note Widget control) wasn't saved
* Fixed a bug in WordPress 4.4+ where field names on Note Widgets did not properly contain a closing square bracket resulting in data not being saved

= 1.3.0 // November 05 2015 =
* Note Widget
  * Replaced Note Widget self::WP_Widget() call with parent::__construct() call (fixes PHP warnings in future versions of WordPress)
  * Introduce note_tinymce_editor_types filter to allow for different TinyMCE editor types to be declared
  * Introduce note_tinymce_preview_styles to allow for adjustment of CSS properties that TinyMCE styles_format would inherit for the "preview" within the Styles TinyMCE dropdown
  * Introduce note_tinymce_blocks filter to allow for adjusting block elements that were added to the Note TinyMCE "Insert" Panel
  * Introduce note_tinymce_style_formats filter to allow for of adjusting style formats on Note TinyMCE editors
  * Introduce note_tinymce_editor_plugins filter to allow for adjusting of specific Note TinyMCE editor type plugins
  * Introduce note_tinymce_editor_blocks filter to allow for adjusting of specific Note TinyMCE editor type blocks
  * Introduce note_tinymce_editor_toolbar filter to allow for adjusting of specific Note TinyMCE editor type toolbar buttons
  * Introduce note_tinymce_editor_preview_styles filter to allow for adjusting of specific Note TinyMCE editor type preview styles
  * Introduce note_tinymce_editor_style_formats filter to allow for adjusting of specific Note TinyMCE editor type style formats
  * Introduce note_tinymce_editor_placeholder filter to allow for adjusting specific Note TinyMCE editor type placeholder
  * Introduce note_tinymce_editor_settings filter to allow for adjusting all specific Note TinyMCE editor type settings
  * Added functionality to ensure that Previewer refresh logic was re-implemented only after all AJAX requests for Note Widget updates had finished (checking to make sure the request was not aborted due to another setting value change); Due to the nature of Note, this ensures that the previewer doesn't refresh during content editing
  * Introduce "Display Layouts" setting in Note Widgets to allow for different content displays (ported from a previous version of Conductor)
  * Introduce Note TinyMCE Background Plugin to allow for a background image to be applied to a Note Widget (not enabled by default)
    * Introduce note_widget_background_image_css fitler to allow for CSS adjustments on Note Widget background images
  * Introduce Note TinyMCE Placeholder Plugin to allow for more unique placeholder elements in Note Widgets
    * Contains logic to determine when mixed placeholder content exists and to only apply placeholder logic to placeholder elements within content
    * Contains logic to allow for placeholder elements nested within other elements
    * Use data-note-placeholder="false" attribute to specify elements that should not inherit placeholder functionality
    * Adjusted Note TinyMCE Placeholder Plugin logic to ensure pasting content into a placeholder element removed functionality
  * Adjusted all Note Widget TinyMCE Plugin names/IDs for better readability (added '_' between words in names/IDs)
  * Added event listener for TinyMCE "SetAttrib" event to ensure updated content was sent to Note Widgets when attributes on elements were updated
  * Adjusted Customizer logic to ensure a better user experience in the Customizer when "Edit" button logic on the Note TinyMCE Insert Plugin was triggered
* Note Widget TinyMCE Theme
  * Adjusted CSS to ensure better cross-theme compatibility
  * Adjusted "core" CSS to ensure user experience between back-end and front-end editing remained consistent
* Note Templates
  * Introduce Note Templates (templating system)
  * Introduce note_get_template_part() function to allow specific templates to be loaded in Note Widgets based on "Display Layout" setting/config
  * Introduce note_locate_template_part() function to check for/locate template part files
* Note Sidebars
  * Fixed bug where removal of a Note Sidebar would result in an unusable Customizer Sidebar when the Note Sidebar was the active Customizer component
  * Fixed bug where Note Sidebar Customizer action and description were not rendered properly upon creation during a Customizer session

= 1.2.2 // August 19 2015 =
* WordPress 4.3 Fixes
  * Replaced Note Widget self::WP_Widget() call with parent::__construct() call (fixes PHP warnings in WordPress 4.3+)
  * Fix bug in WordPress 4.3 where _createToolbar() function was not available on the editor wp object (editor.wp), due to Note Widget TinyMCE configuration not including the TinyMCE 'wordpress' plugin
  * Adjusted Note Widget TinyMCE theme CSS

= 1.2.1 // June 25 2015 =
* Fixed a bug where the Note_Widget() function may not be defined and the Note_Customizer class would throw a fatal PHP error; Thanks Luis Martins
  * This bug indirectly caused conflict with WordPress SEO by Yoast on the sitemap pages
  * @see https://github.com/Yoast/wordpress-seo/blob/09488fd5662d25a843d9715a12133e22e4aaf38d/inc/class-sitemaps.php#L106-L117

= 1.2.0 // June 09 2015 =
* Introduce Note Sidebars
* Introduce Note Sidebar UI Buttons
* Introduce Note Modal Windows
* Introduce Note Settings
* Introduce Note Settings page in Dashboard (Settings > Note)
* Introduce Note uninstall functionality
* Replaced 'note_widget_content_placeholder' filter with 'note_tinymce_placeholder'
* Adjust CSS on various Media Frame elements
* Fixed issue where an uploaded image could not be inserted into a Note Widget during a Customizer session; Thanks Lise Galipeau
* Fixed JavaScript error where the "frame" object was not yet added to the wp.media object and Note modal commands were attempting to listen to the missing "frame" object resulting in a JavaScript error
* Fixed bug where content within an HTML address tag could not be aligned via the Note Toolbar properly while editing a Note Widget

= 1.1.2 // March 12 2015 =
* Moved Note localize data to Note_Customizer PHP Class
* Added ability to allow other plugins to use Note as a "transport" layer to send data to the Customizer from any TinyMCE Editor
* Added ability to allow noteinsert plugin to be utilized on TinyMCE Editors outside of Note
* Added hooks to Note Widget to allow settings and front-end output to be added/adjusted by themes and plugins
* Added ability to prevent widget update event from being triggered (set prevent_widget_update to true on editor.note object to prevent updates)
* Added logic to update jQuery widget data to ensure it wasn't one revision behind in the Customizer
* Added local flags to Note Previewer script to reference when Note Widgets were focused or a modal window was open
* Adjust Note media panel button CSS
* Move cursor to the last child element/node of the body on note-widget-edit
* Fixed issue where Customizer would set Previewer URL to anchor href when clicked inside of a TinyMCE Editor by stopping propagation
* Fixed bug where Note Widget was focused in Previewer and re-ordering widgets did not trigger a refresh

= 1.1.1 // March 02 2015 =
* Added do_shortcode() wrapper around Note Widget output

= 1.1.0 // February 27 2015 =
* Added is_customizer() function to Note Widget to determine if the current page was the Customizer
* Added logic to scroll Previewer window to focused Note Widget on "Edit Content" button click
* Added CSS background color/transition to newly focused editors
* Added ability to create number and bullet lists within content
* Added ability to indent or outdent content
* Added modal CSS styles to Previewer within Customizer
* Added ability to insert images into Note Widgets
* Added Toolbar above Note Widgets in Previewer within Customizer
* Removed unused Customizer JavaScript logic
* Fixed bug where Note Widgets output slashed data (I\'ve, I\'ll, etc...) on front-end while not in Customizer
* Fixed bug where Previewer refresh was triggered while editing content inside of a Note Widget
* Fixed bug where Note Widgets were not focused properly in Previewer
* Fixed bug in where Note was not functioning due to JavaScript error in WordPress versions less than 4.0

= 1.0.1 // November 25 2014 =
* Output Note widget title on front end and added ability to show/hide title (hidden by default)
* Fixed bug where "Edit Content" button on new Note widgets would not function due to lack of widget data
* Fixed bug where first iteration of Note widget content would not sync in Customizer
* Added backwards compatibility support for WordPress 3.9

= 1.0.0 // November 07 2014 =
* Initial Release


== Upgrade Notice ==


== Other Notes ==


= Features =

* Fast & lightweight
* Live front-end Customizer support
* Live text editing in a widget
* Apply common text styles to your copy
* Create links using the WordPress pop-up modal
* Works in any WordPress sidebar
* Visualize the right look & feel of your copy without guessing

= Issues/Bugs =

Please report any issues or bugs on the [GitHub Issue Tracker](https://github.com/sdsweb/note/issues/).