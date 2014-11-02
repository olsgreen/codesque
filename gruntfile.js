module.exports = function(grunt){

	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        htmlhint: {
		    build: {
		        options: {
		            'tag-pair': true,
		            'tagname-lowercase': true,
		            'attr-lowercase': true,
		            'attr-value-double-quotes': true,
		            'doctype-first': true,
		            'spec-char-escape': true,
		            'id-unique': true,
		            'head-script-disabled': true,
		            'style-disabled': true
		        },
		        src: ['index.html']
		    }
		},

		cssmin: {
		  add_banner: {
		    options: {
		      banner: '/* Codesque Theme CSS */'
		    },
		    files: {
			    'css/style.min.css': ['css/normalize.css', 'css/unsemantic-grid-responsive-tablet-no-ie7.css', 'css/style.css']
		    }
		  }
		},

		autoprefixer: {

		    /* prefix all files
		    multiple_files: {
		      expand: true,
		      flatten: true,
		      src: 'css/*.css', // -> src/css/file1.css, src/css/file2.css
		      dest: 'css/prefixed/' // -> dest/css/file1.css, dest/css/file2.css
		    }*/

		    single_file: {
			    src: 'css/style.min.css',
			    dest: 'css/style.min.css'
		    }

		}


    });

    grunt.registerTask('default', ['cssmin', 'autoprefixer']);
    grunt.registerTask('css', ['cssmin', 'autoprefixer']);

};