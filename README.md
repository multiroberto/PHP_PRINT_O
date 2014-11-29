PHP PRINT_O
===========

A better option for printing human readable objects than print_r.

Print_r just isn't up to snuff when it comes to echoing a human readable output, so I use this to print an organized, colorized representation of complex php objects.

To use, simply pass in any object or array to get back some information about it.  It currently doesn't handle EVERY type of data, but it handles the basics.  If you would like to help out, feel free to fork it and add some functionality.

    print_o($object);
