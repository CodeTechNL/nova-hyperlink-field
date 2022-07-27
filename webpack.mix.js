let mix = require('laravel-mix')

require('./nova.mix')
mix.options({
    legacyNodePolyfills: true
});
mix
  .setPublicPath('dist')
  .js('resources/js/field.js', 'js')
  .vue({ version: 3 })
  .css('resources/css/field.css', 'css')
  .nova('codetech/hyperlink')
