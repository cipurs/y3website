module.exports = function(grunt) {

    grunt.initConfig({
      
  browserSync: {
    dev: {
        bsFiles: {
            src : 'style.css'
        },
        options: {
            proxy: "ross.dev/y3website/"
        }
    }
}
    });    
    grunt.loadNpmTasks('grunt-browser-sync');

    
    grunt.registerTask('default', []);

};