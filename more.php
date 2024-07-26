<?php
require_once("../functions/header.php")

?>

<script>
    //for first prod
    document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton1');
    const popup1 = document.getElementById('popup1');
    const popup2 = document.getElementById('popup2');
    const addToCartBtn = document.getElementById('addToCartBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const confirmPaymentBtn = document.getElementById('confirmPaymentBtn');

    // Show popup1 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup1.style.display = 'block';
    });

    // Hide popup1 when Cancel button in popup1 is clicked
    cancelBtn.addEventListener('click', function() {
        popup1.style.display = 'none';
    });

    // Show popup2 and hide popup1 when Add to Cart button is clicked
    addToCartBtn.addEventListener('click', function() {
        popup1.style.display = 'none';
        popup2.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup2.style.display = 'none';
    // });

    // Hide popup2 when Cancel Payment button in popup2 is clicked
    cancelPaymentBtn.addEventListener('click', function() {
        popup2.style.display = 'none';
    });

});

//for second prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton2');
    const popup3 = document.getElementById('popup3');
    const popup4 = document.getElementById('popup4');
    const addToCartBtn2 = document.getElementById('addToCartBtn2');
    const cancelBtn2 = document.getElementById('cancelBtn2');
    const confirmPaymentBtn2 = document.getElementById('confirmPaymentBtn2');

    // Show popup3 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup3.style.display = 'block';
    });

    // Hide popup3 when Cancel button in popup3 is clicked
    cancelBtn2.addEventListener('click', function() {
        popup3.style.display = 'none';
    });

    // Show popup4 and hide popup3 when Add to Cart button is clicked
    addToCartBtn2.addEventListener('click', function() {
        popup3.style.display = 'none';
        popup4.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn2.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup4.style.display = 'none';
    // });

    // Hide popup4 when Cancel Payment button in popup4 is clicked
    cancelPaymentBtn2.addEventListener('click', function() {
        popup4.style.display = 'none';
    });

});

//for third prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton3');
    const popup5 = document.getElementById('popup5');
    const popup6 = document.getElementById('popup6');
    const addToCartBtn3 = document.getElementById('addToCartBtn3');
    const cancelBtn3 = document.getElementById('cancelBtn3');
    const confirmPaymentBtn3 = document.getElementById('confirmPaymentBtn3');

    // Show popup5 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup5.style.display = 'block';
    });

    // Hide popup5 when Cancel button in popup5 is clicked
    cancelBtn3.addEventListener('click', function() {
        popup5.style.display = 'none';
    });

    // Show popup6 and hide popup5 when Add to Cart button is clicked
    addToCartBtn3.addEventListener('click', function() {
        popup5.style.display = 'none';
        popup6.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn3.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup6.style.display = 'none';
    // });

    // Hide popup6 when Cancel Payment button in popup6 is clicked
    cancelPaymentBtn3.addEventListener('click', function() {
        popup6.style.display = 'none';
    });

});

//for forth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton4');
    const popup7 = document.getElementById('popup7');
    const popup8 = document.getElementById('popup8');
    const addToCartBtn4 = document.getElementById('addToCartBtn4');
    const cancelBtn4 = document.getElementById('cancelBtn4');
    const confirmPaymentBtn4 = document.getElementById('confirmPaymentBtn4');

    // Show popup7 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup7.style.display = 'block';
    });

    // Hide popup7 when Cancel button in popup7 is clicked
    cancelBtn4.addEventListener('click', function() {
        popup7.style.display = 'none';
    });

    // Show popup8 and hide popup7 when Add to Cart button is clicked
    addToCartBtn4.addEventListener('click', function() {
        popup7.style.display = 'none';
        popup8.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn4.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup8.style.display = 'none';
    // });

    // Hide popup6 when Cancel Payment button in popup6 is clicked
    cancelPaymentBtn4.addEventListener('click', function() {
        popup8.style.display = 'none';
    });

});

//for fifth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton5');
    const popup9 = document.getElementById('popup9');
    const popup10 = document.getElementById('popup10');
    const addToCartBtn5 = document.getElementById('addToCartBtn5');
    const cancelBtn5 = document.getElementById('cancelBtn5');
    const confirmPaymentBtn5 = document.getElementById('confirmPaymentBtn5');

    // Show popup9 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup9.style.display = 'block';
    });

    // Hide popup9 when Cancel button in popup9 is clicked
    cancelBtn5.addEventListener('click', function() {
        popup9.style.display = 'none';
    });

    // Show popup10 and hide popup9 when Add to Cart button is clicked
    addToCartBtn5.addEventListener('click', function() {
        popup9.style.display = 'none';
        popup10.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn5.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup10.style.display = 'none';
    // });

    // Hide popup10 when Cancel Payment button in popup10 is clicked
    cancelPaymentBtn5.addEventListener('click', function() {
        popup10.style.display = 'none';
    });

});


//for sixth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton6');
    const popup11 = document.getElementById('popup11');
    const popup12 = document.getElementById('popup12');
    const addToCartBtn6 = document.getElementById('addToCartBtn6');
    const cancelBtn6 = document.getElementById('cancelBtn6');
    const confirmPaymentBtn6 = document.getElementById('confirmPaymentBtn6');

    // Show popup11 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup11.style.display = 'block';
    });

    // Hide popup11 when Cancel button in popup11 is clicked
    cancelBtn6.addEventListener('click', function() {
        popup11.style.display = 'none';
    });

    // Show popup12 and hide popup11 when Add to Cart button is clicked
    addToCartBtn6.addEventListener('click', function() {
        popup11.style.display = 'none';
        popup12.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn6.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup12.style.display = 'none';
    // });

    // Hide popup12 when Cancel Payment button in popup12 is clicked
    cancelPaymentBtn6.addEventListener('click', function() {
        popup12.style.display = 'none';
    });

});

//for seventh prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton7');
    const popup13 = document.getElementById('popup13');
    const popup14 = document.getElementById('popup14');
    const addToCartBtn7 = document.getElementById('addToCartBtn7');
    const cancelBtn7 = document.getElementById('cancelBtn7');
    const confirmPaymentBtn7 = document.getElementById('confirmPaymentBtn7');

    // Show popup13 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup13.style.display = 'block';
    });

    // Hide popup13 when Cancel button in popup13 is clicked
    cancelBtn6.addEventListener('click', function() {
        popup11.style.display = 'none';
    });

    // Show popup14 and hide popup13 when Add to Cart button is clicked
    addToCartBtn7.addEventListener('click', function() {
        popup13.style.display = 'none';
        popup14.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn7.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup14.style.display = 'none';
    // });

    // Hide popup14 when Cancel Payment button in popup14 is clicked
    cancelPaymentBtn7.addEventListener('click', function() {
        popup14.style.display = 'none';
    });

});

//for eighth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton8');
    const popup15 = document.getElementById('popup15');
    const popup16 = document.getElementById('popup16');
    const addToCartBtn8 = document.getElementById('addToCartBtn8');
    const cancelBtn8 = document.getElementById('cancelBtn8');
    const confirmPaymentBtn8 = document.getElementById('confirmPaymentBtn8');

    // Show popup15 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup15.style.display = 'block';
    });

    // Hide popup15 when Cancel button in popup15 is clicked
    cancelBtn8.addEventListener('click', function() {
        popup15.style.display = 'none';
    });

    // Show popup16 and hide popup15 when Add to Cart button is clicked
    addToCartBtn8.addEventListener('click', function() {
        popup15.style.display = 'none';
        popup16.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn8.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup16.style.display = 'none';
    // });

    // Hide popup16 when Cancel Payment button in popup16 is clicked
    cancelPaymentBtn8.addEventListener('click', function() {
        popup16.style.display = 'none';
    });

});

//for ninth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton9');
    const popup17 = document.getElementById('popup17');
    const popup18 = document.getElementById('popup18');
    const addToCartBtn9 = document.getElementById('addToCartBtn9');
    const cancelBtn9 = document.getElementById('cancelBtn9');
    const confirmPaymentBtn9 = document.getElementById('confirmPaymentBtn9');

    // Show popup17 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup17.style.display = 'block';
    });

    // Hide popup17 when Cancel button in popup17 is clicked
    cancelBtn9.addEventListener('click', function() {
        popup17.style.display = 'none';
    });

    // Show popup18 and hide popup17 when Add to Cart button is clicked
    addToCartBtn9.addEventListener('click', function() {
        popup17.style.display = 'none';
        popup18.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn9.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup18.style.display = 'none';
    // });

    // Hide popup18 when Cancel Payment button in popup18 is clicked
    cancelPaymentBtn9.addEventListener('click', function() {
        popup18.style.display = 'none';
    });

});

//for tenth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton10');
    const popup19 = document.getElementById('popup19');
    const popup20 = document.getElementById('popup20');
    const addToCartBtn10 = document.getElementById('addToCartBtn10');
    const cancelBtn10 = document.getElementById('cancelBtn10');
    const confirmPaymentBtn10 = document.getElementById('confirmPaymentBtn10');

    // Show popup19 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup19.style.display = 'block';
    });

    // Hide popup19 when Cancel button in popup19 is clicked
    cancelBtn10.addEventListener('click', function() {
        popup19.style.display = 'none';
    });

    // Show popup20 and hide popup19 when Add to Cart button is clicked
    addToCartBtn10.addEventListener('click', function() {
        popup19.style.display = 'none';
        popup20.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn10.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup20.style.display = 'none';
    // });

    // Hide popup20 when Cancel Payment button in popup20 is clicked
    cancelPaymentBtn10.addEventListener('click', function() {
        popup20.style.display = 'none';
    });

});


//for eleventhth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton11');
    const popup21 = document.getElementById('popup21');
    const popup22 = document.getElementById('popup22');
    const addToCartBtn11 = document.getElementById('addToCartBtn11');
    const cancelBtn11 = document.getElementById('cancelBtn11');
    const confirmPaymentBtn11 = document.getElementById('confirmPaymentBtn11');

    // Show popup21 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup21.style.display = 'block';
    });

    // Hide popup21 when Cancel button in popup21 is clicked
    cancelBtn11.addEventListener('click', function() {
        popup21.style.display = 'none';
    });

    // Show popup22 and hide popup21 when Add to Cart button is clicked
    addToCartBtn11.addEventListener('click', function() {
        popup21.style.display = 'none';
        popup22.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn11.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup22.style.display = 'none';
    // });

    // Hide popup22 when Cancel Payment button in popup22 is clicked
    cancelPaymentBtn11.addEventListener('click', function() {
        popup22.style.display = 'none';
    });

});


//for twelevthth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton12');
    const popup23 = document.getElementById('popup23');
    const popup24 = document.getElementById('popup24');
    const addToCartBtn12 = document.getElementById('addToCartBtn12');
    const cancelBtn12 = document.getElementById('cancelBtn12');
    const confirmPaymentBtn12 = document.getElementById('confirmPaymentBtn12');

    // Show popup23 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup23.style.display = 'block';
    });

    // Hide popup23 when Cancel button in popup23 is clicked
    cancelBtn12.addEventListener('click', function() {
        popup23.style.display = 'none';
    });

    // Show popup24 and hide popup23 when Add to Cart button is clicked
    addToCartBtn12.addEventListener('click', function() {
        popup23.style.display = 'none';
        popup24.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn12.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup24.style.display = 'none';
    // });

    // Hide popup24 when Cancel Payment button in popup24 is clicked
    cancelPaymentBtn12.addEventListener('click', function() {
        popup24.style.display = 'none';
    });

});


//for thirteenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton13');
    const popup25 = document.getElementById('popup25');
    const popup26 = document.getElementById('popup26');
    const addToCartBtn13 = document.getElementById('addToCartBtn13');
    const cancelBtn13 = document.getElementById('cancelBtn13');
    const confirmPaymentBtn13 = document.getElementById('confirmPaymentBtn13');

    // Show popup25 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup25.style.display = 'block';
    });

    // Hide popup25 when Cancel button in popup25 is clicked
    cancelBtn13.addEventListener('click', function() {
        popup25.style.display = 'none';
    });

    // Show popup26 and hide popup25 when Add to Cart button is clicked
    addToCartBtn13.addEventListener('click', function() {
        popup25.style.display = 'none';
        popup26.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn13.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup26.style.display = 'none';
    // });

    // Hide popup26 when Cancel Payment button in popup26 is clicked
    cancelPaymentBtn13.addEventListener('click', function() {
        popup26.style.display = 'none';
    });

});


//for forteenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton14');
    const popup27 = document.getElementById('popup27');
    const popup28 = document.getElementById('popup28');
    const addToCartBtn14 = document.getElementById('addToCartBtn14');
    const cancelBtn14 = document.getElementById('cancelBtn14');
    const confirmPaymentBtn14 = document.getElementById('confirmPaymentBtn14');

    // Show popup27 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup27.style.display = 'block';
    });

    // Hide popup27 when Cancel button in popup27 is clicked
    cancelBtn14.addEventListener('click', function() {
        popup27.style.display = 'none';
    });

    // Show popup26 and hide popup25 when Add to Cart button is clicked
    addToCartBtn14.addEventListener('click', function() {
        popup27.style.display = 'none';
        popup28.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn14.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup28.style.display = 'none';
    // });

    // Hide popup28 when Cancel Payment button in popup28 is clicked
    cancelPaymentBtn14.addEventListener('click', function() {
        popup28.style.display = 'none';
    });

});


//for fifteenth prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton15');
    const popup29 = document.getElementById('popup29');
    const popup30 = document.getElementById('popup30');
    const addToCartBtn15 = document.getElementById('addToCartBtn15');
    const cancelBtn15 = document.getElementById('cancelBtn15');
    const confirmPaymentBtn15 = document.getElementById('confirmPaymentBtn15');

    // Show popup29 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup29.style.display = 'block';
    });

    // Hide popup29 when Cancel button in popup29 is clicked
    cancelBtn15.addEventListener('click', function() {
        popup29.style.display = 'none';
    });

    // Show popup26 and hide popup25 when Add to Cart button is clicked
    addToCartBtn15.addEventListener('click', function() {
        popup29.style.display = 'none';
        popup30.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn15.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup30.style.display = 'none';
    // });

    // Hide popup30 when Cancel Payment button in popup30 is clicked
    cancelPaymentBtn15.addEventListener('click', function() {
        popup30.style.display = 'none';
    });

});


//for sixteenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton16');
    const popup31 = document.getElementById('popup31');
    const popup32 = document.getElementById('popup32');
    const addToCartBtn16 = document.getElementById('addToCartBtn16');
    const cancelBtn16 = document.getElementById('cancelBtn16');
    const confirmPaymentBtn16 = document.getElementById('confirmPaymentBtn16');

    // Show popup31 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup31.style.display = 'block';
    });

    // Hide popup31 when Cancel button in popup31 is clicked
    cancelBtn16.addEventListener('click', function() {
        popup31.style.display = 'none';
    });

    // Show popup32 and hide popup31 when Add to Cart button is clicked
    addToCartBtn16.addEventListener('click', function() {
        popup31.style.display = 'none';
        popup32.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn16.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup32.style.display = 'none';
    // });

    // Hide popup32 when Cancel Payment button in popup32 is clicked
    cancelPaymentBtn16.addEventListener('click', function() {
        popup32.style.display = 'none';
    });

});


//for seventeenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton17');
    const popup33 = document.getElementById('popup33');
    const popup34 = document.getElementById('popup34');
    const addToCartBtn17 = document.getElementById('addToCartBtn17');
    const cancelBtn17 = document.getElementById('cancelBtn17');
    const confirmPaymentBtn17 = document.getElementById('confirmPaymentBtn17');

    // Show popup33 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup33.style.display = 'block';
    });

    // Hide popup33 when Cancel button in popup33 is clicked
    cancelBtn17.addEventListener('click', function() {
        popup33.style.display = 'none';
    });

    // Show popup34 and hide popup31 when Add to Cart button is clicked
    addToCartBtn17.addEventListener('click', function() {
        popup33.style.display = 'none';
        popup34.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn17.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup34.style.display = 'none';
    // });

    // Hide popup34 when Cancel Payment button in popup34 is clicked
    cancelPaymentBtn17.addEventListener('click', function() {
        popup34.style.display = 'none';
    });

});


//for eighteenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton18');
    const popup35 = document.getElementById('popup35');
    const popup36 = document.getElementById('popup36');
    const addToCartBtn18 = document.getElementById('addToCartBtn18');
    const cancelBtn18 = document.getElementById('cancelBtn18');
    const confirmPaymentBtn18 = document.getElementById('confirmPaymentBtn18');

    // Show popup35 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup35.style.display = 'block';
    });

    // Hide popup35 when Cancel button in popup33 is clicked
    cancelBtn18.addEventListener('click', function() {
        popup35.style.display = 'none';
    });

    // Show popup36 and hide popup35 when Add to Cart button is clicked
    addToCartBtn18.addEventListener('click', function() {
        popup35.style.display = 'none';
        popup36.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn18.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup36.style.display = 'none';
    // });

    // Hide popup36 when Cancel Payment button in popup34 is clicked
    cancelPaymentBtn18.addEventListener('click', function() {
        popup36.style.display = 'none';
    });

});


//for ninteenth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton19');
    const popup37 = document.getElementById('popup37');
    const popup38 = document.getElementById('popup38');
    const addToCartBtn19 = document.getElementById('addToCartBtn19');
    const cancelBtn19 = document.getElementById('cancelBtn19');
    const confirmPaymentBtn19 = document.getElementById('confirmPaymentBtn19');

    // Show popup37 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup37.style.display = 'block';
    });

    // Hide popup37 when Cancel button in popup37 is clicked
    cancelBtn19.addEventListener('click', function() {
        popup37.style.display = 'none';
    });

    // Show popup38 and hide popup37 when Add to Cart button is clicked
    addToCartBtn19.addEventListener('click', function() {
        popup37.style.display = 'none';
        popup38.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn19.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup38.style.display = 'none';
    // });

    // Hide popup38 when Cancel Payment button in popup38 is clicked
    cancelPaymentBtn19.addEventListener('click', function() {
        popup38.style.display = 'none';
    });

});

//for twentth prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton20');
    const popup39 = document.getElementById('popup39');
    const popup40 = document.getElementById('popup40');
    const addToCartBtn20 = document.getElementById('addToCartBtn20');
    const cancelBtn20 = document.getElementById('cancelBtn20');
    const confirmPaymentBtn20 = document.getElementById('confirmPaymentBtn20');

    // Show popup39 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup39.style.display = 'block';
    });

    // Hide popup39 when Cancel button in popup39 is clicked
    cancelBtn20.addEventListener('click', function() {
        popup39.style.display = 'none';
    });

    // Show popup40 and hide popup39 when Add to Cart button is clicked
    addToCartBtn20.addEventListener('click', function() {
        popup39.style.display = 'none';
        popup40.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn20.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup40.style.display = 'none';
    // });

    // Hide popup40 when Cancel Payment button in popup40 is clicked
    cancelPaymentBtn20.addEventListener('click', function() {
        popup40.style.display = 'none';
    });

});


//for twenfirst prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton21');
    const popup41 = document.getElementById('popup41');
    const popup42 = document.getElementById('popup42');
    const addToCartBtn21 = document.getElementById('addToCartBtn21');
    const cancelBtn21 = document.getElementById('cancelBtn21');
    const confirmPaymentBtn21 = document.getElementById('confirmPaymentBtn21');

    // Show popup41 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup41.style.display = 'block';
    });

    // Hide popup41 when Cancel button in popup41 is clicked
    cancelBtn21.addEventListener('click', function() {
        popup41.style.display = 'none';
    });

    // Show popup42 and hide popup39 when Add to Cart button is clicked
    addToCartBtn21.addEventListener('click', function() {
        popup41.style.display = 'none';
        popup42.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn21.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup42.style.display = 'none';
    // });

    // Hide popup42 when Cancel Payment button in popup42 is clicked
    cancelPaymentBtn21.addEventListener('click', function() {
        popup42.style.display = 'none';
    });

});


//for twentysecond prod


document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton22');
    const popup43 = document.getElementById('popup43');
    const popup44 = document.getElementById('popup44');
    const addToCartBtn22 = document.getElementById('addToCartBtn22');
    const cancelBtn21 = document.getElementById('cancelBtn22');
    const confirmPaymentBtn22 = document.getElementById('confirmPaymentBtn22');

    // Show popup43 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup43.style.display = 'block';
    });

    // Hide popup43 when Cancel button in popup41 is clicked
    cancelBtn22.addEventListener('click', function() {
        popup43.style.display = 'none';
    });

    // Show popup44 and hide popup43 when Add to Cart button is clicked
    addToCartBtn22.addEventListener('click', function() {
        popup43.style.display = 'none';
        popup44.style.display = 'block';
    });

    // // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn22.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup44.style.display = 'none';
    // });

    // Hide popup42 when Cancel Payment button in popup42 is clicked
    cancelPaymentBtn22.addEventListener('click', function() {
        popup44.style.display = 'none';
    });

});


//for twentythird prod

document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton23');
    const popup45 = document.getElementById('popup45');
    const popup46 = document.getElementById('popup46');
    const addToCartBtn23 = document.getElementById('addToCartBtn23');
    const cancelBtn23 = document.getElementById('cancelBtn23');
    const confirmPaymentBtn23 = document.getElementById('confirmPaymentBtn23');

    // Show popup45 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup45.style.display = 'block';
    });

    // Hide popup45 when Cancel button in popup41 is clicked
    cancelBtn23.addEventListener('click', function() {
        popup45.style.display = 'none';
    });

    // Show popup46 and hide popup45 when Add to Cart button is clicked
    addToCartBtn23.addEventListener('click', function() {
        popup45.style.display = 'none';
        popup46.style.display = 'block';
    });

    // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn23.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup46.style.display = 'none';
    // });

    // Hide popup46 when Cancel Payment button in popup42 is clicked
    cancelPaymentBtn23.addEventListener('click', function() {
        popup46.style.display = 'none';
    });

});


//for twentyforth prod





document.addEventListener("DOMContentLoaded", function() {
    const buyButton = document.getElementById('buyButton24');
    const popup47 = document.getElementById('popup47');
    const popup48 = document.getElementById('popup48');
    const addToCartBtn24 = document.getElementById('addToCartBtn24');
    const cancelBtn24 = document.getElementById('cancelBtn24');
    const confirmPaymentBtn24 = document.getElementById('confirmPaymentBtn24');

    // Show popup47 when Buy button is clicked
    buyButton.addEventListener('click', function() {
        popup47.style.display = 'block';
    });

    // Hide popup47 when Cancel button in popup41 is clicked
    cancelBtn24.addEventListener('click', function() {
        popup47.style.display = 'none';
    });

    // Show popup48 and hide popup47 when Add to Cart button is clicked
    addToCartBtn24.addEventListener('click', function() {
        popup47.style.display = 'none';
        popup48.style.display = 'block';
    });

    // Example functionality for confirming payment (you would add your own logic here)
    // confirmPaymentBtn24.addEventListener('click', function() {
    //     alert('Payment confirmed!'); // Replace with actual payment confirmation logic
    //     popup48.style.display = 'none';
    // });

    // Hide popup42 when Cancel Payment button in popup42 is clicked
    cancelPaymentBtn24.addEventListener('click', function() {
        popup48.style.display = 'none';
    });

});


//form forconfirm payment button24



document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn24 = document.getElementById('confirmPaymentBtn24');
    const cancelPaymentBtn24 = document.getElementById('cancelPaymentBtn24');
    const paymentDetailsPopup24 = document.getElementById('paymentDetailsPopup24');
    const cancelPaymentDetailsBtn24 = document.getElementById('cancelPaymentDetailsBtn24');
    const paymentForm24 = document.getElementById('paymentForm24');

    confirmPaymentBtn24.addEventListener('click', function () {
        document.getElementById('popup48').style.display = 'none';
        paymentDetailsPopup24.style.display = 'block';
    });

    cancelPaymentBtn24.addEventListener('click', function () {
        document.getElementById('popup48').style.display = 'none';
    });

    cancelPaymentDetailsBtn24.addEventListener('click', function () {
        paymentDetailsPopup24.style.display = 'none';
    });

    paymentForm24.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup24.style.display = 'none';
    });
});


//form forconfirm payment button23
document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn23 = document.getElementById('confirmPaymentBtn23');
    const cancelPaymentBtn23 = document.getElementById('cancelPaymentBtn23');
    const paymentDetailsPopup23 = document.getElementById('paymentDetailsPopup23');
    const cancelPaymentDetailsBtn23 = document.getElementById('cancelPaymentDetailsBtn23');
    const paymentForm = document.getElementById('paymentForm23');

    confirmPaymentBtn23.addEventListener('click', function () {
        document.getElementById('popup46').style.display = 'none';
        paymentDetailsPopup23.style.display = 'block';
    });

    cancelPaymentBtn23.addEventListener('click', function () {
        document.getElementById('popup46').style.display = 'none';
    });

    cancelPaymentDetailsBtn23.addEventListener('click', function () {
        paymentDetailsPopup23.style.display = 'none';
    });

    paymentForm23.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup23.style.display = 'none';
    });
});


//form forconfirm payment button22


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn22 = document.getElementById('confirmPaymentBtn22');
    const cancelPaymentBtn22 = document.getElementById('cancelPaymentBtn22');
    const paymentDetailsPopup22 = document.getElementById('paymentDetailsPopup22');
    const cancelPaymentDetailsBtn22 = document.getElementById('cancelPaymentDetailsBtn22');
    const paymentForm22 = document.getElementById('paymentForm22');

    confirmPaymentBtn22.addEventListener('click', function () {
        document.getElementById('popup44').style.display = 'none';
        paymentDetailsPopup22.style.display = 'block';
    });

    cancelPaymentBtn22.addEventListener('click', function () {
        document.getElementById('popup44').style.display = 'none';
    });

    cancelPaymentDetailsBtn22.addEventListener('click', function () {
        paymentDetailsPopup22.style.display = 'none';
    });

    paymentForm22.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup22.style.display = 'none';
    });
});


//form forconfirm payment button21


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn21 = document.getElementById('confirmPaymentBtn21');
    const cancelPaymentBtn21 = document.getElementById('cancelPaymentBtn21');
    const paymentDetailsPopup21 = document.getElementById('paymentDetailsPopup21');
    const cancelPaymentDetailsBtn21 = document.getElementById('cancelPaymentDetailsBtn21');
    const paymentForm21 = document.getElementById('paymentForm21');

    confirmPaymentBtn21.addEventListener('click', function () {
        document.getElementById('popup42').style.display = 'none';
        paymentDetailsPopup21.style.display = 'block';
    });

    cancelPaymentBtn21.addEventListener('click', function () {
        document.getElementById('popup42').style.display = 'none';
    });

    cancelPaymentDetailsBtn21.addEventListener('click', function () {
        paymentDetailsPopup21.style.display = 'none';
    });

    paymentForm21.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup21.style.display = 'none';
    });
});


//form forconfirm payment button20

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn20 = document.getElementById('confirmPaymentBtn20');
    const cancelPaymentBtn20 = document.getElementById('cancelPaymentBtn20');
    const paymentDetailsPopup20 = document.getElementById('paymentDetailsPopup20');
    const cancelPaymentDetailsBtn20 = document.getElementById('cancelPaymentDetailsBtn20');
    const paymentForm20 = document.getElementById('paymentForm20');

    confirmPaymentBtn20.addEventListener('click', function () {
        document.getElementById('popup40').style.display = 'none';
        paymentDetailsPopup20.style.display = 'block';
    });

    cancelPaymentBtn20.addEventListener('click', function () {
        document.getElementById('popup40').style.display = 'none';
    });

    cancelPaymentDetailsBtn20.addEventListener('click', function () {
        paymentDetailsPopup20.style.display = 'none';
    });

    paymentForm20.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup20.style.display = 'none';
    });
});


//form forconfirm payment button19


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn19 = document.getElementById('confirmPaymentBtn19');
    const cancelPaymentBtn19 = document.getElementById('cancelPaymentBtn19');
    const paymentDetailsPopup19 = document.getElementById('paymentDetailsPopup19');
    const cancelPaymentDetailsBtn19 = document.getElementById('cancelPaymentDetailsBtn19');
    const paymentForm19 = document.getElementById('paymentForm19');

    confirmPaymentBtn19.addEventListener('click', function () {
        document.getElementById('popup38').style.display = 'none';
        paymentDetailsPopup19.style.display = 'block';
    });

    cancelPaymentBtn19.addEventListener('click', function () {
        document.getElementById('popup38').style.display = 'none';
    });

    cancelPaymentDetailsBtn19.addEventListener('click', function () {
        paymentDetailsPopup19.style.display = 'none';
    });

    paymentForm19.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup19.style.display = 'none';
    });
});


//form forconfirm payment button18

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn18 = document.getElementById('confirmPaymentBtn18');
    const cancelPaymentBtn18 = document.getElementById('cancelPaymentBtn18');
    const paymentDetailsPopup18 = document.getElementById('paymentDetailsPopup18');
    const cancelPaymentDetailsBtn18 = document.getElementById('cancelPaymentDetailsBtn18');
    const paymentForm18 = document.getElementById('paymentForm18');

    confirmPaymentBtn18.addEventListener('click', function () {
        document.getElementById('popup36').style.display = 'none';
        paymentDetailsPopup18.style.display = 'block';
    });

    cancelPaymentBtn18.addEventListener('click', function () {
        document.getElementById('popup36').style.display = 'none';
    });

    cancelPaymentDetailsBtn18.addEventListener('click', function () {
        paymentDetailsPopup18.style.display = 'none';
    });

    paymentForm18.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup18.style.display = 'none';
    });
});


//form forconfirm payment button17

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn17 = document.getElementById('confirmPaymentBtn17');
    const cancelPaymentBtn17 = document.getElementById('cancelPaymentBtn17');
    const paymentDetailsPopup17 = document.getElementById('paymentDetailsPopup17');
    const cancelPaymentDetailsBtn17 = document.getElementById('cancelPaymentDetailsBtn17');
    const paymentForm17 = document.getElementById('paymentForm17');

    confirmPaymentBtn17.addEventListener('click', function () {
        document.getElementById('popup34').style.display = 'none';
        paymentDetailsPopup17.style.display = 'block';
    });

    cancelPaymentBtn17.addEventListener('click', function () {
        document.getElementById('popup34').style.display = 'none';
    });

    cancelPaymentDetailsBtn17.addEventListener('click', function () {
        paymentDetailsPopup17.style.display = 'none';
    });

    paymentForm17.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup17.style.display = 'none';
    });
});


//form forconfirm payment button16


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn16 = document.getElementById('confirmPaymentBtn16');
    const cancelPaymentBtn16 = document.getElementById('cancelPaymentBtn16');
    const paymentDetailsPopup16 = document.getElementById('paymentDetailsPopup16');
    const cancelPaymentDetailsBtn16 = document.getElementById('cancelPaymentDetailsBtn16');
    const paymentForm16 = document.getElementById('paymentForm16');

    confirmPaymentBtn16.addEventListener('click', function () {
        document.getElementById('popup32').style.display = 'none';
        paymentDetailsPopup16.style.display = 'block';
    });

    cancelPaymentBtn16.addEventListener('click', function () {
        document.getElementById('popup32').style.display = 'none';
    });

    cancelPaymentDetailsBtn16.addEventListener('click', function () {
        paymentDetailsPopup16.style.display = 'none';
    });

    paymentForm16.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup16.style.display = 'none';
    });
});


//form forconfirm payment button15

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn15 = document.getElementById('confirmPaymentBtn15');
    const cancelPaymentBtn15 = document.getElementById('cancelPaymentBtn15');
    const paymentDetailsPopup15 = document.getElementById('paymentDetailsPopup15');
    const cancelPaymentDetailsBtn15 = document.getElementById('cancelPaymentDetailsBtn15');
    const paymentForm15 = document.getElementById('paymentForm15');

    confirmPaymentBtn15.addEventListener('click', function () {
        document.getElementById('popup30').style.display = 'none';
        paymentDetailsPopup15.style.display = 'block';
    });

    cancelPaymentBtn15.addEventListener('click', function () {
        document.getElementById('popup30').style.display = 'none';
    });

    cancelPaymentDetailsBtn15.addEventListener('click', function () {
        paymentDetailsPopup15.style.display = 'none';
    });

    paymentForm15.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup15.style.display = 'none';
    });
});


//form forconfirm payment 14

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn14 = document.getElementById('confirmPaymentBtn14');
    const cancelPaymentBtn14 = document.getElementById('cancelPaymentBtn14');
    const paymentDetailsPopup15 = document.getElementById('paymentDetailsPopup14');
    const cancelPaymentDetailsBtn14 = document.getElementById('cancelPaymentDetailsBtn14');
    const paymentForm14 = document.getElementById('paymentForm14');

    confirmPaymentBtn14.addEventListener('click', function () {
        document.getElementById('popup28').style.display = 'none';
        paymentDetailsPopup14.style.display = 'block';
    });

    cancelPaymentBtn14.addEventListener('click', function () {
        document.getElementById('popup28').style.display = 'none';
    });

    cancelPaymentDetailsBtn14.addEventListener('click', function () {
        paymentDetailsPopup14.style.display = 'none';
    });

    paymentForm14.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup14.style.display = 'none';
    });
});

//form forconfirm payment 13

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn13 = document.getElementById('confirmPaymentBtn13');
    const cancelPaymentBtn13 = document.getElementById('cancelPaymentBtn13');
    const paymentDetailsPopup13 = document.getElementById('paymentDetailsPopup13');
    const cancelPaymentDetailsBtn13 = document.getElementById('cancelPaymentDetailsBtn13');
    const paymentForm13 = document.getElementById('paymentForm13');

    confirmPaymentBtn13.addEventListener('click', function () {
        document.getElementById('popup26').style.display = 'none';
        paymentDetailsPopup13.style.display = 'block';
    });

    cancelPaymentBtn13.addEventListener('click', function () {
        document.getElementById('popup26').style.display = 'none';
    });

    cancelPaymentDetailsBtn13.addEventListener('click', function () {
        paymentDetailsPopup13.style.display = 'none';
    });

    paymentForm13.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup13.style.display = 'none';
    });
});


//form forconfirm payment 12


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn12 = document.getElementById('confirmPaymentBtn12');
    const cancelPaymentBtn12 = document.getElementById('cancelPaymentBtn12');
    const paymentDetailsPopup12 = document.getElementById('paymentDetailsPopup12');
    const cancelPaymentDetailsBtn12 = document.getElementById('cancelPaymentDetailsBtn12');
    const paymentForm12 = document.getElementById('paymentForm12');

    confirmPaymentBtn12.addEventListener('click', function () {
        document.getElementById('popup24').style.display = 'none';
        paymentDetailsPopup12.style.display = 'block';
    });

    cancelPaymentBtn12.addEventListener('click', function () {
        document.getElementById('popup24').style.display = 'none';
    });

    cancelPaymentDetailsBtn12.addEventListener('click', function () {
        paymentDetailsPopup12.style.display = 'none';
    });

    paymentForm12.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup12.style.display = 'none';
    });
});


//form forconfirm payment 11


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn11 = document.getElementById('confirmPaymentBtn11');
    const cancelPaymentBtn11 = document.getElementById('cancelPaymentBtn11');
    const paymentDetailsPopup11 = document.getElementById('paymentDetailsPopup11');
    const cancelPaymentDetailsBtn11 = document.getElementById('cancelPaymentDetailsBtn11');
    const paymentForm11 = document.getElementById('paymentForm11');

    confirmPaymentBtn11.addEventListener('click', function () {
        document.getElementById('popup22').style.display = 'none';
        paymentDetailsPopup11.style.display = 'block';
    });

    cancelPaymentBtn11.addEventListener('click', function () {
        document.getElementById('popup22').style.display = 'none';
    });

    cancelPaymentDetailsBtn11.addEventListener('click', function () {
        paymentDetailsPopup11.style.display = 'none';
    });

    paymentForm11.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup11.style.display = 'none';
    });
});


//form forconfirm payment 10

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn10 = document.getElementById('confirmPaymentBtn10');
    const cancelPaymentBtn10 = document.getElementById('cancelPaymentBtn10');
    const paymentDetailsPopup10 = document.getElementById('paymentDetailsPopup10');
    const cancelPaymentDetailsBtn10 = document.getElementById('cancelPaymentDetailsBtn10');
    const paymentForm10 = document.getElementById('paymentForm10');

    confirmPaymentBtn10.addEventListener('click', function () {
        document.getElementById('popup20').style.display = 'none';
        paymentDetailsPopup10.style.display = 'block';
    });

    cancelPaymentBtn10.addEventListener('click', function () {
        document.getElementById('popup20').style.display = 'none';
    });

    cancelPaymentDetailsBtn10.addEventListener('click', function () {
        paymentDetailsPopup10.style.display = 'none';
    });

    paymentForm10.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup10.style.display = 'none';
    });
});

//form forconfirm payment 9

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn9 = document.getElementById('confirmPaymentBtn9');
    const cancelPaymentBtn9 = document.getElementById('cancelPaymentBtn9');
    const paymentDetailsPopup9 = document.getElementById('paymentDetailsPopup9');
    const cancelPaymentDetailsBtn9 = document.getElementById('cancelPaymentDetailsBtn9');
    const paymentForm9 = document.getElementById('paymentForm9');

    confirmPaymentBtn9.addEventListener('click', function () {
        document.getElementById('popup18').style.display = 'none';
        paymentDetailsPopup9.style.display = 'block';
    });

    cancelPaymentBtn9.addEventListener('click', function () {
        document.getElementById('popup18').style.display = 'none';
    });

    cancelPaymentDetailsBtn9.addEventListener('click', function () {
        paymentDetailsPopup9.style.display = 'none';
    });

    paymentForm9.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup9.style.display = 'none';
    });
});


//form forconfirm payment 8

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn8 = document.getElementById('confirmPaymentBtn8');
    const cancelPaymentBtn8 = document.getElementById('cancelPaymentBtn8');
    const paymentDetailsPopup8 = document.getElementById('paymentDetailsPopup8');
    const cancelPaymentDetailsBtn8 = document.getElementById('cancelPaymentDetailsBtn8');
    const paymentForm8 = document.getElementById('paymentForm8');

    confirmPaymentBtn8.addEventListener('click', function () {
        document.getElementById('popup16').style.display = 'none';
        paymentDetailsPopup8.style.display = 'block';
    });

    cancelPaymentBtn8.addEventListener('click', function () {
        document.getElementById('popup16').style.display = 'none';
    });

    cancelPaymentDetailsBtn8.addEventListener('click', function () {
        paymentDetailsPopup8.style.display = 'none';
    });

    paymentForm8.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup8.style.display = 'none';
    });
});

//form forconfirm payment 7

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn7 = document.getElementById('confirmPaymentBtn7');
    const cancelPaymentBtn7 = document.getElementById('cancelPaymentBtn7');
    const paymentDetailsPopup7 = document.getElementById('paymentDetailsPopup7');
    const cancelPaymentDetailsBtn7 = document.getElementById('cancelPaymentDetailsBtn7');
    const paymentForm7= document.getElementById('paymentForm7');

    confirmPaymentBtn7.addEventListener('click', function () {
        document.getElementById('popup14').style.display = 'none';
        paymentDetailsPopup7.style.display = 'block';
    });

    cancelPaymentBtn7.addEventListener('click', function () {
        document.getElementById('popup14').style.display = 'none';
    });

    cancelPaymentDetailsBtn7.addEventListener('click', function () {
        paymentDetailsPopup7.style.display = 'none';
    });

    paymentForm7.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup7.style.display = 'none';
    });
});


//form forconfirm payment 6

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn6 = document.getElementById('confirmPaymentBtn6');
    const cancelPaymentBtn6 = document.getElementById('cancelPaymentBtn6');
    const paymentDetailsPopup6 = document.getElementById('paymentDetailsPopup6');
    const cancelPaymentDetailsBtn6 = document.getElementById('cancelPaymentDetailsBtn6');
    const paymentForm6= document.getElementById('paymentForm6');

    confirmPaymentBtn6.addEventListener('click', function () {
        document.getElementById('popup12').style.display = 'none';
        paymentDetailsPopup6.style.display = 'block';
    });

    cancelPaymentBtn6.addEventListener('click', function () {
        document.getElementById('popup12').style.display = 'none';
    });

    cancelPaymentDetailsBtn6.addEventListener('click', function () {
        paymentDetailsPopup6.style.display = 'none';
    });

    paymentForm6.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup6.style.display = 'none';
    });
});


//form forconfirm payment 5

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn5 = document.getElementById('confirmPaymentBtn5');
    const cancelPaymentBtn5 = document.getElementById('cancelPaymentBtn5');
    const paymentDetailsPopup5 = document.getElementById('paymentDetailsPopup5');
    const cancelPaymentDetailsBtn6 = document.getElementById('cancelPaymentDetailsBtn5');
    const paymentForm5= document.getElementById('paymentForm5');

    confirmPaymentBtn5.addEventListener('click', function () {
        document.getElementById('popup10').style.display = 'none';
        paymentDetailsPopup5.style.display = 'block';
    });

    cancelPaymentBtn5.addEventListener('click', function () {
        document.getElementById('popup10').style.display = 'none';
    });

    cancelPaymentDetailsBtn5.addEventListener('click', function () {
        paymentDetailsPopup5.style.display = 'none';
    });

    paymentForm5.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup5.style.display = 'none';
    });
});

//form forconfirm payment 4

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn4 = document.getElementById('confirmPaymentBtn4');
    const cancelPaymentBtn4 = document.getElementById('cancelPaymentBtn4');
    const paymentDetailsPopup4 = document.getElementById('paymentDetailsPopup4');
    const cancelPaymentDetailsBtn4 = document.getElementById('cancelPaymentDetailsBtn4');
    const paymentForm4= document.getElementById('paymentForm4');

    confirmPaymentBtn4.addEventListener('click', function () {
        document.getElementById('popup8').style.display = 'none';
        paymentDetailsPopup4.style.display = 'block';
    });

    cancelPaymentBtn4.addEventListener('click', function () {
        document.getElementById('popup8').style.display = 'none';
    });

    cancelPaymentDetailsBtn4.addEventListener('click', function () {
        paymentDetailsPopup4.style.display = 'none';
    });

    paymentForm4.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup4.style.display = 'none';
    });
});

//form forconfirm payment 3

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn3 = document.getElementById('confirmPaymentBtn3');
    const cancelPaymentBtn3 = document.getElementById('cancelPaymentBtn3');
    const paymentDetailsPopup3 = document.getElementById('paymentDetailsPopup3');
    const cancelPaymentDetailsBtn3 = document.getElementById('cancelPaymentDetailsBtn3');
    const paymentForm3= document.getElementById('paymentForm3');

    confirmPaymentBtn3.addEventListener('click', function () {
        document.getElementById('popup6').style.display = 'none';
        paymentDetailsPopup3.style.display = 'block';
    });

    cancelPaymentBtn3.addEventListener('click', function () {
        document.getElementById('popup6').style.display = 'none';
    });

    cancelPaymentDetailsBtn3.addEventListener('click', function () {
        paymentDetailsPopup3.style.display = 'none';
    });

    paymentForm3.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup3.style.display = 'none';
    });
});


//form forconfirm payment 2


document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn2 = document.getElementById('confirmPaymentBtn2');
    const cancelPaymentBtn2 = document.getElementById('cancelPaymentBtn2');
    const paymentDetailsPopup2 = document.getElementById('paymentDetailsPopup2');
    const cancelPaymentDetailsBtn2 = document.getElementById('cancelPaymentDetailsBtn2');
    const paymentForm2= document.getElementById('paymentForm2');

    confirmPaymentBtn2.addEventListener('click', function () {
        document.getElementById('popup4').style.display = 'none';
        paymentDetailsPopup2.style.display = 'block';
    });

    cancelPaymentBtn2.addEventListener('click', function () {
        document.getElementById('popup4').style.display = 'none';
    });

    cancelPaymentDetailsBtn2.addEventListener('click', function () {
        paymentDetailsPopup2.style.display = 'none';
    });

    paymentForm2.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup2.style.display = 'none';
    });
});

//form forconfirm payment 1

document.addEventListener('DOMContentLoaded', function () {
    const confirmPaymentBtn = document.getElementById('confirmPaymentBtn');
    const cancelPaymentBtn = document.getElementById('cancelPaymentBtn');
    const paymentDetailsPopup = document.getElementById('paymentDetailsPopup');
    const cancelPaymentDetailsBtn = document.getElementById('cancelPaymentDetailsBtn');
    const paymentForm= document.getElementById('paymentForm');

    confirmPaymentBtn.addEventListener('click', function () {
        document.getElementById('popup2').style.display = 'none';
        paymentDetailsPopup.style.display = 'block';
    });

    cancelPaymentBtn.addEventListener('click', function () {
        document.getElementById('popup2').style.display = 'none';
    });

    cancelPaymentDetailsBtn.addEventListener('click', function () {
        paymentDetailsPopup.style.display = 'none';
    });

    paymentForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const momoNumber = document.getElementById('momoNumber').value;
        
        // Replace this with actual logic to send message
        alert(`Payment request sent to ${name} at ${momoNumber}. Please check your phone to approve the payment.`);
        
        paymentDetailsPopup.style.display = 'none';
    });
});















































































































</script>

<style>
    /* Styles for the popup container */
    .popup-content {
        position: absolute;
        background-color: white;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000; /* Ensure it's above other elements */
        max-width: 300px;
        display: none; /* Initially hidden */
    }

    /* Styles for the popup heading */
    .popup-content h4 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    /* Styles for the popup buttons */
    .popup-content button {
        margin-top: 10px;
    }

    /* Additional styles as needed */

    #popup2 {
        background-color: #f0f0f0;
    }

    #popup2 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup2 .popup-buttons {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup2 .popup-buttons button {
        margin: 0 5px; /* Adjust margin between buttons */
    }


        /* Styles second prod popup */
        #popup4 {
        background-color: #f0f0f0;
    }

    #popup4 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup4 .popup-buttons2 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup4 .popup-buttons2 button {
        margin: 0 5px; /* Adjust margin between buttons */

    }

        /* Styles third prod popup */

        #popup6 {
        background-color: #f0f0f0;
    }

    #popup6 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup6 .popup-buttons3 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup6 .popup-buttons3 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }

            /* Styles fourth prod popup */
            #popup8{
        background-color: #f0f0f0;
    }

    #popup8 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup8 .popup-buttons4 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup8 .popup-buttons4 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }

                /* Styles fifth prod popup */
    
                #popup10{
        background-color: #f0f0f0;
    }

    #popup10 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup10 .popup-buttons5 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup10 .popup-buttons5 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }
   /* Styles sixth prod popup */
   #popup12{
        background-color: #f0f0f0;
    }

    #popup12 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup12 .popup-buttons6 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup12 .popup-buttons6 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }

       /* Styles seventh prod popup */
       #popup14{
        background-color: #f0f0f0;
    }

    #popup14 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup14 .popup-buttons7 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup14 .popup-buttons7 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }   

     /* Styles eighth prod popup */

     #popup16{
        background-color: #f0f0f0;
    }

    #popup16 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup16 .popup-buttons8 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup16 .popup-buttons8 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }   

     /* Styles ninth prod popup */

     #popup18{
        background-color: #f0f0f0;
    }

    #popup18 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup18 .popup-buttons9 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup18 .popup-buttons9 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }   

   /* Styles tenth prod popup */

   #popup20{
        background-color: #f0f0f0;
    }

    #popup20 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup20 .popup-buttons10 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup20 .popup-buttons10 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }   

    /* Styles eleventh prod popup */

    #popup22{
        background-color: #f0f0f0;
    }

    #popup22 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup22 .popup-buttons11 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup22 .popup-buttons11 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }  
    
     /* Styles twelevth prod popup */


     #popup24{
        background-color: #f0f0f0;
    }

    #popup24 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup24 .popup-buttons12 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup24 .popup-buttons12 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }  


  /* Styles thirteenth prod popup */

  #popup26{
        background-color: #f0f0f0;
    }

    #popup26 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup26 .popup-buttons13 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup26 .popup-buttons13 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }  

  /* Styles forteenth prod popup */

  #popup28{
        background-color: #f0f0f0;
    }

    #popup28 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup28 .popup-buttons14 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup28 .popup-buttons14 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }  

    /* Styles fifteenth prod popup */

    #popup30{
        background-color: #f0f0f0;
    }

    #popup30 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup30 .popup-buttons15 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup30 .popup-buttons15 button {
        margin: 0 5px; /* Adjust margin between buttons */



    }  

 /* Styles sixteenth prod popup */
 #popup32{
        background-color: #f0f0f0;
    }

    #popup32 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup32 .popup-buttons16 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup32 .popup-buttons16 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 
    
   /* Styles seventeenth prod popup */

   #popup34{
        background-color: #f0f0f0;
    }

    #popup34 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup34 .popup-buttons17 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup34 .popup-buttons17 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 

     /* Styles eighteenth prod popup */

     #popup36{
        background-color: #f0f0f0;
    }

    #popup36 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup36 .popup-buttons18 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup36 .popup-buttons18 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 

     /* Styles ninteenth prod popup */

     #popup38{
        background-color: #f0f0f0;
    }

    #popup38 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup38 .popup-buttons19 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup38 .popup-buttons19 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 

    /* Styles twentth prod popup */


    #popup40{
        background-color: #f0f0f0;
    }

    #popup40 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup40 .popup-buttons20 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup40 .popup-buttons20 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 


  /* Styles twentyfirst prod popup */

  #popup42{
        background-color: #f0f0f0;
    }

    #popup42 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup42 .popup-buttons21 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup42 .popup-buttons21 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 

   /* Styles twentysecond prod popup */


   #popup44{
        background-color: #f0f0f0;
    }

    #popup44 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup44 .popup-buttons22 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup44 .popup-buttons22 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 


    /* Styles twentythirdprod popup */


    #popup46{
        background-color: #f0f0f0;
    }

    #popup46 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup46 .popup-buttons23 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup46 .popup-buttons23 button {
        margin: 0 5px; /* Adjust margin between buttons */



    } 


    /* Styles twentyfourthprod popup */


    #popup48{
        
        background-color: #f0f0f0;
        display:flex;
        justify-content:center;
    }

    #popup48 h4 {
        color: #333;
    }

    /* Flexbox styles for button alignment */
    #popup48 .popup-buttons24 {
        display: flex;
        justify-content: center; /* Center aligns buttons horizontally */
    }

    #popup48 .popup-buttons24 button {
        /* margin: 10px 5px; Adjust margin between buttons */



    } 

    .paymentForm {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.btn {
    padding: 2px 5px;

    cursor: pointer;
    border: none;
    border-radius: 4px;
    font-size: 1em;
}

.btn-success {
    margin-right:5px;
    background-color: #28a745;
    color: #fff;
}

.btn-success:hover {
    background-color: #218838;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

label {
    display: block;
    margin-bottom: 2px;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="text"]:focus {
    border-color: #28a745;
    outline: none;
}

#paymentDetailsPopup form {
    width: 100%;
}




    

    

























    



    

            

        



    



</style>












<section id="sources" style="margin-top:100px">
<div class="row">
                    <div class="cl-md-12">
                        <div class="section-header text-center pb-5">
                        <button class="btn btn-warning text-light"  style="width:8%;background-color:yellow;position:absolute;transform:translateX(-600%);"><a href='product.php' style="color:black;text-decoration:none;font-weight:bold;font: size 16px;">Go Back</a></button> 

                            <h2 class="text-primary">HELLO!! WELCOME TO THIS PAGE</h2>
                            <P style="font-weight:bold">Please feel free to presss your order and buy good quality baby's products from our reliable, affordable and cheapest sources</P>
                        </div>
                    </div>
                </div> 
</section>





<section   style="margin-top:100px">
    <div class="container" style="margin-top:30px; width:90%">
        <!--FIRST RAW-->
                <div class="row" style=" margin-bottom:10px;">
                <div class="col-12 col-md-12 col-lg-4">
    <h3 style="text-align:center">Bathtub</h3>
    
    <img class="imag" src="../IMAGES/product/bathtub.jpg" style="width:400px; height:300px;">
    
    <div style="position:relative;">
        <button id="buyButton1" class="btn btn-warning text-light buy-button" data-target="popup1" style="width:30%; background-color:blue; font-weight:bold; position:absolute; transform:translateX(100%); font-size:20px;">Buy</button>
        
        <div id="popup1" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Description</h4>
            <p>Name: <b>Bathtub</b>, Price: <b>US Dollars($9.0)</b>, Color: <b>green</b>, Make: <b>plastic</b>, Size: <b>medium</b></p>
            <p>Best suited for your Baby</p>
            <button id="addToCartBtn" class="btn btn-primary">Add to Cart</button>
            <button id="cancelBtn" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>
        </div>

        <div id="popup2" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons">
            <button id="confirmPaymentBtn" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>



    </div>
</div>

 



                     


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Nest</h3>

                    <img class=" imag"src="../IMAGES/product/Baby_nest.webp" style=" width:400px; height:300px;">
                    <div  style="position:relative;">  <button id="buyButton2" class="btn btn-warning text-light buy-button2"  data-target="popup3" style="width:30%;background-color:blue;font-weght:bold;position:absolute;transform:translateX(100%);font-size:20px; ">Buy</button>
                    <div id="popup3" class="popup-content" style="display:none; margin-top:40px;">
                    <h4>Description</h4>
                        <p>Name:<b>Baby Nest</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
            <button  id="addToCartBtn2" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn2" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>
        <div id="popup4" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons2">
            <button id="confirmPaymentBtn2" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn2" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>



        <div id="paymentDetailsPopup2" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm2">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn2" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div>
                    

                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 



                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Bottle</h3>

                    <img class=" imag"src="../IMAGES/product/bottle-1.jpg" style=" width:400px; height:300px;">
                    <div>    <button  id="buyButton3" class="btn btn-warning text-light buy-button3"  data-target="popup5" style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup5" class="popup-content" style="display:none; margin-top:0px;">
                    <h4>Description</h4>
                        <p>Name:<b>  Baby Bottle</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
            <button  id="addToCartBtn3"  class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn3"class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup6" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons3">
            <button id="confirmPaymentBtn3" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn3" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup3" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm3">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn3" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>


        
</div>
                    

                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 


                        <!--SECOND RAW -->
                        <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Car Seat</h3>

                     <img class=" imag"src="../IMAGES/product/doll.jfif"  style=" width:400px; height:300px;">
                     
                     <div>    <button id="buyButton4" class="btn btn-warning text-light buy-button4 " data-target="popup7" style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>

                     <div id="popup7" class="popup-content" style="display:none;">
                    <h4>Description</h4>
                        <p>Name:<b> Car Seat </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
            <button  id="addToCartBtn4" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn4" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>
        <div id="popup8" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons4">
            <button id="confirmPaymentBtn4" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn4" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup4" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm4">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn4" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div>
                     
                     
                     
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Lotion-</h3>

                    <img class=" imag"src="../IMAGES/product/lotion.jpg"  style=" width:400px; height:300px;">
                    
                    

                    <div>    <button  id="buyButton5" class="btn btn-warning text-light buy-button5 "  data-target="popup9"   style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup9" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Lotion</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button   id="addToCartBtn5"class="btn btn-primary">Add to Cart</button>
            <button   id="cancelBtn5"class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup10" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons5">
            <button id="confirmPaymentBtn5" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn5" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup5" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm5">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn5" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>

</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 

                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Nappies</h3>

                    <img class=" imag"src="../IMAGES/product/nappie.jfif"  style=" width:400px; height:300px;">
                    

                    <div>    <button id="buyButton6" class="btn btn-warning text-light buy-button6 "  data-target="popup11"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup11" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Nappies</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn6" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn6" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>
        <div id="popup12" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons6">
            <button id="confirmPaymentBtn6" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn6" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup6" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm6">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn6" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 


                 <!--THIRD RAW -->


                  
                  <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Smearing Jelly</h3>

                     <img class=" imag"src="../IMAGES/product/veseline.jpg"  style=" width:400px; height:300px;">
                     

                     
                     <div>    <button id="buyButton7" class="btn btn-warning text-light buy-button7" data-target="popup13"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                     <div id="popup13" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Smearing Jelly</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn7" class="btn btn-primary">Add to Cart</button>
            <button   id="cancelBtn7"class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>
        <div id="popup14" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons7">
            <button id="confirmPaymentBtn7" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn7" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup7" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm7">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn7" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-chair</h3>

                    <img class=" imag"src="../IMAGES/product/car.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton8"class="btn btn-warning text-light buy-button8" data-target="popup15"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup15" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Chair</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn8" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn8" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup16" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons8">
            <button id="confirmPaymentBtn8" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn8" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup8" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm8">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn8" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 


                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-stocks</h3>

                    <img class=" imag"src="../IMAGES/product/stocks.jpg"  style=" width:400px; height:300px;">
                    <div>    <button  id="buyButton9" class="btn btn-warning text-light buy-button9 "  data-target="popup17"   style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup17" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby-stocks</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn9" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn9" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup18" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons9">
            <button id="confirmPaymentBtn9" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn9" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup9" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm9">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn9" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>

        

</div> 
                   
                    
                   
                   
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 



                <!--fouth RAW -->

                <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Baby-Carrier</h3>

                     <img class=" imag"src="../IMAGES/product/carrier.jpg"  style=" width:400px; height:300px;">
                     <div>    <button   id="buyButton10"class="btn btn-warning text-light buy-button10" data-target="popup19"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup19" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Carrier </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn10" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn10" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup20" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons10">
            <button id="confirmPaymentBtn10" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn10" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup10" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm10">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn10" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     

                    
                    

                    
                    
                     
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Clothes</h3>

                    <img class=" imag"src="../IMAGES/product/cloth-2.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton11"class="btn btn-warning text-light buy-button11" data-target="popup21"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup21" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Clothes </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button   id="addToCartBtn11"class="btn btn-primary">Add to Cart</button>
            <button   id="cancelBtn11" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup22" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons11">
            <button id="confirmPaymentBtn11" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn11" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup11" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm11">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn11" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 



                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Receiver</h3>

                    <img class=" imag"src="../IMAGES/product/receiver-2.jpg"  style=" width:400px; height:300px;">
                    

                    
                    <div>    <button   id="buyButton12"class="btn btn-warning text-light buy-button12" data-target="popup23"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup23" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Receiver </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn12" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn12" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup24" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons12">
            <button id="confirmPaymentBtn12" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn12" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup12" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm12">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn12" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div>
                
                <!--fifth raw-->
                

                <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Baby-Overall</h3>

                     <img class=" imag"src="../IMAGES/product/overall.webp"  style=" width:400px; height:300px;">
                    
                    

                    
                    
                     <div>    <button   id="buyButton13"class="btn btn-warning text-light buy-button13" data-target="popup25"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup25" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Overall </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn13" class="btn btn-primary">Add to Cart</button>
            <button id="cancelBtn13" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup26" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons13">
            <button id="confirmPaymentBtn13" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn13" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup13" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm13">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn13" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Soap</h3>

                    <img class=" imag"src="../IMAGES/product/soap.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton14"class="btn btn-warning text-light buy-button14" data-target="popup27"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup27" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Soap</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn14" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn14" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup28" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons14">
            <button id="confirmPaymentBtn14" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn14" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup14" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm14">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn14" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 


                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Wipes</h3>

                    <img class=" imag"src="../IMAGES/product/wipe.webp"  style=" width:400px; height:300px;">
                    

                    
                    <div>    <button   id="buyButton15"class="btn btn-warning text-light buy-button15" data-target="popup29"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup29" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Wipes </b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button   id="addToCartBtn15"class="btn btn-primary">Add to Cart</button>
            <button   id="cancelBtn15" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup30" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons15">
            <button id="confirmPaymentBtn15" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn15" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup15" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm15">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn15" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div>
                
                
                 <!--sixth raw-->
                 <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Potty Chair</h3>

                     <img class=" imag"src="../IMAGES/product/potty.jfif"  style=" width:400px; height:300px;">
                    
                    

                    
                    
                     <div>    <button   id="buyButton16"class="btn btn-warning text-light buy-button16" data-target="popup31"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup31" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Potty Chair</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button   id="addToCartBtn16"class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn16"  class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup32" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons16">
            <button id="confirmPaymentBtn16" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn16" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup16" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm16">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn16" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Dress</h3>

                    <img class=" imag"src="../IMAGES/product/cloth-5.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton17"class="btn btn-warning text-light buy-button17" data-target="popup33"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup33" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Dress</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn17" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn17" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup34" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons17">
            <button id="confirmPaymentBtn17" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn17" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup17" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm17">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn17" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 


                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Trousers</h3>

                    <img class=" imag"src="../IMAGES/product/trousers.webp"  style=" width:400px; height:300px;">
                    

                    
                    <div>    <button   id="buyButton18"class="btn btn-warning text-light buy-button18" data-target="popup35"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup35" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Trousers</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn18" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn18" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup36" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons18">
            <button id="confirmPaymentBtn18" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn18" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup18" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm18">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn18" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 

                <!--seventh raw-->

                <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Baby Hat</h3>

                     <img class=" imag"src="../IMAGES/product/hat.jfif"  style=" width:400px; height:300px;">
                    
                    

                    
                    
                     <div>    <button   id="buyButton19"class="btn btn-warning text-light buy-button19" data-target="popup37"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup37" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Hat</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn19" class="btn btn-primary">Add to Cart</button>
            <button id="cancelBtn19" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup38" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons19">
            <button id="confirmPaymentBtn19" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn19" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup19" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm19">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn19" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby-Pants</h3>

                    <img class=" imag"src="../IMAGES/product/pant-2.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton20"class="btn btn-warning text-light buy-button20" data-target="popup39"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup39" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Pants</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn20" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn20"  class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup40" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons20">
            <button id="confirmPaymentBtn20" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn20" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup20" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm20">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn20" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 


                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby-Chair</h3>

                    <img class=" imag"src="../IMAGES/product/baby-chair.webp"  style=" width:400px; height:300px;">
                    

                    
                    <div>    <button   id="buyButton21"class="btn btn-warning text-light buy-button21" data-target="popup41"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup41" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Chair</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button   id="addToCartBtn21"class="btn btn-primary">Add to Cart</button>
            <button id="cancelBtn21"  class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>

        <div id="popup42" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons21">
            <button id="confirmPaymentBtn21" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn21" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>


        <div id="paymentDetailsPopup21" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm21">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn21" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 


                 <!--eighth raw-->

                 <div class="row" style=" margin-bottom:10px;">
                     <div class="col-12 col-md-12 col-lg-4">
                     <h3 style="text-align:center">Baby Feeding-Bottle</h3>

                     <img class=" imag"src="../IMAGES/product/bottle-3.jpg"  style=" width:400px; height:300px;">
                    
                    

                    
                    
                     <div>    <button   id="buyButton22"class="btn btn-warning text-light buy-button22" data-target="popup43"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup43" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Feeding Bottle</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn22" class="btn btn-primary">Add to Cart</button>
            <button id="cancelBtn22" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup44" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons22">
            <button id="confirmPaymentBtn22" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn22" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup22" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm22">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn22" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>
</div> 
                     <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div> 


                    <div class="col-12 col-md-12 col-lg-4" >
                    <h3 style="text-align:center">Baby  Waterproof Urine-mat</h3>

                    <img class=" imag"src="../IMAGES/product/urine-mat.jpg"  style=" width:400px; height:300px;">
                    

                    <div>    <button   id="buyButton23"class="btn btn-warning text-light buy-button23" data-target="popup45"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup45" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Waterproof Urine-mat</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn23" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn23" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup46" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons23">
            <button id="confirmPaymentBtn23" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn23" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>

        <div id="paymentDetailsPopup23" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm23">
            <label for="name23">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber23">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn23" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>



        

</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                    </div> 


                    <div class="col-12 col-md-12 col-lg-4">
                    <h3 style="text-align:center">Baby Feeding spoon</h3>

                    <img class=" imag"src="../IMAGES/product/spoon.jpg"  style=" width:400px; height:300px;">
                    

                    
                    <div>    <button   id="buyButton24"class="btn btn-warning text-light buy-button24" data-target="popup47"  style="width:30%;background-color:blue;font-weght:bold;absolute;transform:translateX(100%);font-size:20px;">Buy</button>
                    <div id="popup47" class="popup-content" style="display:none;">
                        <h4>Description</h4>
                        <p>Name:<b>Baby Feeding Spoon</b>, Price:<b>US Dollars($9.0)</b>, Color:<b>geren</b>, Make:<b>plastic</b>,Size: <b>medium</b></p>
                        <p>Best suited for your Baby</p>
             

            <button  id="addToCartBtn24" class="btn btn-primary">Add to Cart</button>
            <button  id="cancelBtn24" class="btn btn-secondary cancel-button" style="margin-left:10px;">Cancel</button>

            
            
        </div>


        <div id="popup48" class="popup-content" style="display:none; margin-top:40px;">
            <h4>Item Added Successfully!</h4>
            <p>Proceed to payment:</p>

            <div class="popup-buttons24">
            <button id="confirmPaymentBtn24" class="btn btn-success" style="width:150px;margin-tp:5px;">Confirm Payment</button>
            <button id="cancelPaymentBtn24" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel Payment</button>


            </div>
           
        </div>




        <div id="paymentDetailsPopup24" class="popup-content" style="display:none; margin-top:40px;">
        <h4>Enter Payment Details</h4>
        <form id="paymentForm24">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="momoNumber">Momo Number:</label>
            <input type="text" id="momoNumber" name="momoNumber" required><br><br>
            <button type="submit" class="btn btn-success" style="width:150px;">Submit</button>
        </form>
        <button id="cancelPaymentDetailsBtn24" class="btn btn-secondary cancel-button" style="margin-left:0px;margin-bottom:0px;">Cancel</button>
    </div>

</div> 
                    <!-- <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p> -->


                        
                    </div>
                    
                </div> 
















                








                








                
                

         
    </div>

















</section>





<?php
require_once("../functions/footer.php")
?>