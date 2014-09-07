'use strict';
module.exports = function(grunt) {
	var jsFiles = [
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js',
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/button.js',
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js',
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js',
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js',
			'vendor/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js',
			'vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
			'js/custom.js'
		];

	// load all grunt tasks matching the `grunt-*` pattern
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		// watch for changes and trigger compass, jshint, uglify and livereload
		'watch': {
			'sass': {
				files: ['sass/**/*.scss'],
				tasks: ['sass']
			},
			'js': {
				files: [jsFiles],
				tasks: ['concat', 'uglify']
			},
			'livereload': {
				options: {
					port: 35729,
					livereload: true
				},
				files: ['sass/**/*.scss', jsFiles, '**/*.php', 'img/**/*.{png,jpg,jpeg,gif,svg}']
			}
		},

		// sass
		'sass': {
			development: {
				options: {
					style: 'compressed'
				},
				files: {
					'assets/css/css.css': 'sass/index.scss'
				}
			}
		},
		
		// js
		'concat': {
			development: {
				files: {
					"assets/js/js.js": [jsFiles],
					"assets/js/jplayer.js": "vendor/jplayer/jquery.jplayer/jquery.jplayer.js",
					"assets/js/jplayer.playlist.js": "vendor/jplayer/add-on/jplayer.playlist.js"
				}
			}
		},

		// minify js
		'uglify': {
			development: {
				files: {
					"assets/js/js.js": "assets/js/js.js",
					"assets/js/jplayer.js": "assets/js/jplayer.js",
					"assets/js/jplayer.playlist.js": "assets/js/jplayer.playlist.js"
				}
			}
		}

	});

	// register task
	grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);
};