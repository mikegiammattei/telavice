module.exports = function(grunt){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options:{
                    style: 'compressed'
                },
                files: [{
                    expand: true,
                    cwd: 'content/themes/telavice/assets/scss',
                    src: [
                        'style.scss'
                    ],
                    dest: 'content/themes/telavice/',
                    ext: '.css'
                }]
            }
        },

        watch: {
           /* options: {
                livereload: true
            },*/
            sass: {
                files: [
                    'content/themes/telavice/assets/scss/**',
                ],
                tasks: ['sass']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
   /* grunt.loadNpmTasks('grunt-reload-chrome');*/
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Do the Task
    grunt.registerInitTask('default', ['sass', 'watch']);
}