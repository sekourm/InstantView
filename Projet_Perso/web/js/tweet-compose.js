$(document).ready(function () {
    var comment = $('form#enquiry textarea')

    if(comment.length !== 0)
    {
        counter = '',
            counterValue = 140, //change this to set the max character count
            minCommentLength = 10, //set minimum comment length
            $commentValue = comment.val(),
            $commentLength = $commentValue.length,
            submitButton = $('form#enquiry input[type=submit]').hide();

        $('form').prepend('<span class="counter"></span>');
        counter = $('span.counter');
        counter.html(counterValue); //display your set max length
        comment.attr('maxlength', counterValue); //apply max length to textarea
        $('form').find('p.info > span').html(minCommentLength);
        // everytime a key is pressed inside the textarea, update counter
        comment.keyup(function () {
            var $this = $(this);
            $commentLength = $this.val().length; //get number of characters
            counter.html(counterValue - $commentLength); //update counter
            if ($commentLength > minCommentLength - 1) {
                submitButton.fadeIn(200);
            } else {
                submitButton.fadeOut(200);
            }
        });
    }
});