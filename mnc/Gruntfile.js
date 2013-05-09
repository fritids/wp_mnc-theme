/*global module:false*/
module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		banner: '/*!\n<%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
		'<%= grunt.template.today("yyyy-mm-dd") %>' +
		' - <%= pkg.homepage %>\n' +
		'Author: <%= pkg.author %>\n*/\n',

		clean: {
			css: [
				'css/main-min.css'
			],
			js: [
				'js/plugins.js',
				'js/plugins-min.js',
				'js/script-min.js'
			]
		},

		sass: {
			build: {
				options: {
					style: 'compressed'
				},
				files: {
					'css/main-min.css': 'scss/main.scss'
				}
			}
		},

		concat: {
			js: {
				src: [
				'js/plugins/jquery.easing.js',
				'js/plugins/jquery.fitvids.js',
				'js/plugins/jquery.smooth-scrolling.js',
				'js/plugins/jquery.fancybox.js',
				'js/plugins/minform.js'
				],
				dest: 'js/plugins.js'
			}
		},

		uglify: {
			options: {
				banner: '<%= banner %>'
			},
			plugins: {
				src: 'js/plugins.js',
				dest: 'js/plugins-min.js'
			},
			script: {
				src: 'js/script.js',
				dest: 'js/script-min.js'
			}
		},

		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				immed: true,
				latedef: true,
				newcap: true,
				noarg: true,
				sub: true,
				undef: true,
				unused: true,
				boss: true,
				eqnull: true,
				browser: true,
				globals: {
					'jQuery': true,
					'Modernizr': true,
					'console': true,
					'MNC': true
				}
			},
			gruntfile: {
				src: 'Gruntfile.js'
			},
			script: {
				src: 'js/script.js'
			}
		},
		watch: {
			gruntfile: {
				files: '<%= jshint.gruntfile.src %>',
				tasks: ['jshint:gruntfile']
			},
			js: {
				files: '<%= jshint.script.src %>',
				tasks: ['jshint:script']
			}
		}
	});

	// These plugins provide necessary tasks.
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	// Default task.
	//grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify']);
	grunt.registerTask('build', ['jshint', 'clean', 'sass:build', 'concat', 'uglify']);

};
