//ADD FILM VALIDATE
 $(document).ready(function() {
    $('#frmadd').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your name film '
                    },
                 
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: ' Please Enter Your Title'
                    },
                   
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Your Content'
                    },
                   
                }
            },
            // image: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please Choice Image'
            //         },
                    
            //     }
            // },
            
        }
    });
});