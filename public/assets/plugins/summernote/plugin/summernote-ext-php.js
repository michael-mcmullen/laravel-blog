var tmpl = $.summernote.renderer.getTemplate();
// template
/**
* @class plugin.php
*
* PHP Plugin
*/
$.summernote.addPlugin({
    /** @property {String} name name of plugin */
    name: 'php-code',

    /**
    * @property {Object} buttons
    * @property {Function} buttons.php   function to make button
    */
    buttons: { // buttons
        php: function (lang, options) {
            return tmpl.iconButton('fa fa-file-code-o', {
                event : 'addPHP',
                title: 'Add PHP Code',
                hide: true
            });
        }
    },

    /**
    * @property {Object} events
    * @property {Function} events.hello  run function when button that has a 'hello' event name  fires click
    */
    events: { // events
        addPHP: function (event, editor, layoutInfo) {
            // Get current editable node
            var $editable = layoutInfo.editable();

            var $codeText = $('<pre class="php">//PHP Code Here</pre>');

            editor.insertNode($editable, $codeText[0]);
        }
    }
});