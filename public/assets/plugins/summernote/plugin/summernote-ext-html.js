var tmpl = $.summernote.renderer.getTemplate();
// template
/**
* @class plugin.php
*
* PHP Plugin
*/
$.summernote.addPlugin({
    /** @property {String} name name of plugin */
    name: 'html-code',

    /**
    * @property {Object} buttons
    * @property {Function} buttons.html   function to make button
    */
    buttons: { // buttons
        html: function (lang, options) {
            return tmpl.iconButton('fa fa-html5', {
                event : 'addHTML',
                title: 'Add HTML Code',
                hide: true
            });
        }
    },

    /**
    * @property {Object} events
    * @property {Function} events.hello  run function when button that has a 'hello' event name  fires click
    */
    events: { // events
        addHTML: function (event, editor, layoutInfo) {
            // Get current editable node
            var $editable = layoutInfo.editable();

            var $codeText = $('<pre class="html">HTML Code Here</pre>');

            editor.insertNode($editable, $codeText[0]);
        }
    }
});