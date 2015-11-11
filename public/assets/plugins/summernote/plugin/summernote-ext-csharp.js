var tmpl = $.summernote.renderer.getTemplate();
// template
/**
* @class plugin.php
*
* PHP Plugin
*/
$.summernote.addPlugin({
    /** @property {String} name name of plugin */
    name: 'csharp-code',

    /**
    * @property {Object} buttons
    * @property {Function} buttons.csharp   function to make button
    */
    buttons: { // buttons
        csharp: function (lang, options) {
            return tmpl.iconButton('fa fa-gamepad', {
                event : 'addCSHARP',
                title: 'Add C# Code',
                hide: true
            });
        }
    },

    /**
    * @property {Object} events
    * @property {Function} events.hello  run function when button that has a 'hello' event name  fires click
    */
    events: { // events
        addCSHARP: function (event, editor, layoutInfo) {
            // Get current editable node
            var $editable = layoutInfo.editable();

            var $codeText = $('<pre class="c#">string code = "C SHARP";</pre>');

            editor.insertNode($editable, $codeText[0]);
        }
    }
});