module.exports = function(grunt) {

	grunt.initConfig({
		// Bower
		Bower : {
			path : 'bower_components/'
		},
		// Cake
		Cake : {
			// webroot
			path_webroot : 'app/webroot/',

			// JS
			path_js : '<%= Cake.path_webroot %>js/',

			// CSS
			path_css : '<%= Cake.path_webroot %>css/'
		},
		pkg : grunt.file.readJSON('package.json'),
		copy : {
			// copy libraries which were not installed by Bower
			cake : {
				files : [ {
					expand : true,
					cwd : 'bower_components/other/',
					src : [ '**' ],
					dest : '<%= Cake.path_webroot %>vendor/other'
				} ]
			}
		},
		bower : {
			install : {
				options : {
					targetDir : '<%= Cake.path_webroot %>vendor',
					layout : 'byComponent',
					install : true,
					verbose : true,
					cleanTargetDir : true,
					cleanBowerDir : false
				}
			}
		},
		compass : {
			// Cake
			cake : {
				options : {
					config : 'compass_config.rb'
				}
			}
		},
		csslint : {
			options : {
				csslintrc : '.csslintrc'
			},
			// Cake
			cake : {
				options : {
					import : 2
				},
				src : [ '<%= Cake.path_css %>src/*.css' ]
			}
		},
		cssmin : {
			// Cake
			cake : {
				src : '<%= Cake.path_css %>src/*.css',
				dest : '<%= Cake.path_css %>build/main.min.css'
			}
		},
		uglify : {
			options : {
				mangle : false
			},
			cake : {
				src : '<%= Cake.path_js %>src/*.js',
				dest : '<%= Cake.path_js %>build/main.min.js'
			}
		},
		jshint : {
			files : [ 'Gruntfile.js', '<%= Cake.path_js %>src/*.js' ],
			options : {
				globals : {
					jQuery : true
				}
			}
		},
		watch : {
			config : {
				files : [ 'Gruntfile.js' ],
				tasks : [ 'jshint' ]
			},
			js : {
				files : [ '<%= Cake.path_js %>src/*.js', // Cake
				'!**/*.min.js' ],
				tasks : [ 'jshint', 'uglify' ]
			},
			css : {
				files : [ '<%= Cake.path_css %>src/*.css', // Cake
				'!**/*.min.css' ],
				tasks : [ 'cssmin' ]
			},
			compass : {
				files : [ '<%= Cake.path_webroot %>sass/*.{scss,sass}' ],
				tasks : [ 'compass', 'cssmin' ]
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-bower-task');

	grunt.registerTask('default', [ 'watch' ]);
	grunt.registerTask('vendor', ['bower','copy']);// install libraries into webroot/vendor folder (grunt vendor)

};
