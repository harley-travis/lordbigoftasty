# WJ - Api and Frontend

Laravel API with VueJs frontend.

Special thanks to 

https://github.com/sehmbimanvir/laravel-vue-boilerplate
https://medium.com/@sehmbimanvir/laravel-vue-js-boilerplate-44f1d88f2cc0

# Installation

In Project Root Directory, Run
```sh
composer install
```

Install Node Packages
```sh
npm install
```

Run DB Migrations & Seeds
```sh
php artisan migrate --seed
```

Development Build
```sh
npm run dev
```

Production Build
```sh
npm run prod
```

Listen for Changes
```sh
npm run watch-poll
```

### * Disable Or Delete Eslint Completely
In **webpack.config.js** Just Comment out or Delete the following Code

```javascript
mix.webpackConfig({
   module: {
      rules: [{
         enforce: 'pre',
         exclude: /node_modules/,
         loader: 'eslint-loader',
         test: /\.(js|vue)?$/
      }]
   }
})
```
You can also delete all dependencies regarding eslint.

### * Disable Vendor Extraction
Currently Webpack Mix generate two different files 
* app.js - Application Code
* vendor.js - Vendor Libraries
* manifest.js - Webpack Configuration

In Order to Generate Single file (Disable Vendor Extraction), write add following code in **webpack.config.js**
```javascript
mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css')
```
Instead of
```javascript
mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css').extract(['vue'])
```

For More Information Read [Laravel Vendor Extraction](https://laravel.com/docs/5.7/mix#vendor-extraction)

### Disable Specific Rule in Eslint
To disable specific rule for eslint Open **.eslintrc.js** from Root Dir and add a new Rule under rules key.

e.g: To disable lint for Unused variables Just add 
```json
'vue/no-unused-vars': 'off'
```
**Note:** 'off' can be replaced with 0 (Integer)

There are two types of rules used

* [Eslint Standard Rules](https://eslint.org/docs/rules/)
* [Eslint Vuejs Rules](https://www.npmjs.com/package/eslint-plugin-vue#bulb-rules)
