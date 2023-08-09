$(document).ready(function(){
    $('textarea').keyup(function(){
        var values = $('#counters').val();
        // alert(values);

        // Count characters
        var charCount = values.length;

        // Count sentences (assuming sentences end with '.', '!', or '?')
        var sentenceCount = values.split(/[.!?]+/).length - 1;

        // Count paragraphs (assuming paragraphs are separated by one line break)
        var paragraphCount = values.split(/\n\s*\n/).length;

        $.ajax({
            type: 'POST',
            url : 'process.php',
            data: {
                data: values,
                charCount: charCount,
                sentenceCount: sentenceCount,
                paragraphCount: paragraphCount
            },
            success: function(data)
            {
                $('#display').html(data);
            }
        });
    });
});
