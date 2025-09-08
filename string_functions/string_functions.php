<?php
    
    // chop() -
    // function removes whitespaces or other predefined characters from the right end of a string.
    $str = "Hello World!";
    echo $str . "<br>";
    echo chop($str,"World!");
    
    echo "<br>";

    // chr() -
    // function returns a character from the specified ASCII value.
    echo chr(52) . "<br>"; // Decimal value
    echo chr(052) . "<br>"; // Octal value
    echo chr(0x52) . "<br>"; // Hex value

    echo "<br>";

    // chunk_split() -
    // function splits a string into a series of smaller parts.
    // Note: This function does not alter the original string.
    // Syntax - chunk_split(string,length,end)
    echo chunk_split($str,1,".");
        // Split the string after each character and add a "." after each split

    echo "<br>";

    // echo() -
    // function outputs one or more strings.
    // // Note: The echo() function is not actually a function, so you are not required to use parentheses with it. However, if you want to pass more than one parameter to echo(), using parentheses will generate a parse error.
    // Tip: The echo() function is slightly faster than print().
    // Tip: The echo() function also has a shortcut syntax. Prior to PHP 5.4.0, this syntax only works with the short_open_tag configuration setting enabled.
    echo "Hello world!";

    echo "<br>";

    // explode() -
    // function breaks a string into an array.
    // Note: The "separator" parameter cannot be an empty string.
    // Note: This function is binary-safe.
    //  Syntax - explode(separator,string,limit)
    $str1 = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str1));
        // Parameter       Values
        // Parameter	    Description
        // separator	    Required. Specifies where to break the string
        // string	        Required. The string to split
        // limit	        Optional. Specifies the number of array elements to return.
        //                 Possible values:
        //                 Greater than 0 - Returns an array with a maximum of limit element(s)
        //                 Less than 0 - Returns an array except for the last -limit elements()
        //                 0 - Returns an array with one element
    echo "<br>";
    $str2 = 'one,two,three,four';
    // zero limit
    print_r(explode(',',$str2,0));

    // positive limit
    print_r(explode(',',$str2,2));

    // negative limit
    print_r(explode(',',$str2,-1));

    echo "<br>";

    // fprintf() -
    // function writes a formatted string to a specified output stream (example: file or database).
    // The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string. This function works "step-by-step". At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc.
    // Note: If there are more % signs than arguments, you must use placeholders. A placeholder is inserted after the % sign, and consists of the argument- number and "\$". See example two.
    // Tip: Related functions: printf(), sprintf(), vprintf(), vsprintf() and vfprintf()
    // Syntax - fprintf(stream,format,arg1,arg2,arg++)
    $number = 9;
    $str3 = "Beijing";
    $file = fopen("test.txt","w");
    echo fprintf($file,"There are %u million bicycles in %s.",$number,$str3);
        // Parameter                   Values
        // Parameter	                Description
        // stream	                    Required. Specifies where to write/output the string
        // format	                    Required. Specifies the string and how to format the variables in it.
        // Possible format values:
        //                             %% - Returns a percent sign
        //                             %b - Binary number
        //                             %c - The character according to the ASCII value
        //                             %d - Signed decimal number (negative, zero or positive)
        //                             %e - Scientific notation using a lowercase (e.g. 1.2e+2)
        //                             %E - Scientific notation using a uppercase (e.g. 1.2E+2)
        //                             %u - Unsigned decimal number (equal to or greather than zero)
        //                             %f - Floating-point number (local settings aware)
        //                             %F - Floating-point number (not local settings aware)
        //                             %g - shorter of %e and %f
        //                             %G - shorter of %E and %f
        //                             %o - Octal number
        //                             %s - String
        //                             %x - Hexadecimal number (lowercase letters)
        //                             %X - Hexadecimal number (uppercase letters)
                                    
        //                             Additional format values. These are placed between the % and the letter (example %.2f):
        //                             + (Forces both + and - in front of numbers. By default, only negative numbers are marked)
        //                             ' (Specifies what to use as padding. Default is space. Must be used together with the width specifier. Example: %'x20s (this uses "x" as padding)
        //                             - (Left-justifies the variable value)
        //                             [0-9] (Specifies the minimum width held of to the variable value)
        //                             .[0-9] (Specifies the number of decimal digits or maximum string length)
                                    
        //                             Note: If multiple additional format values are used, they must be in the same order as above.

        // arg1	                Required. The argument to be inserted at the first %-sign in the format string
        // arg2	                Optional. The argument to be inserted at the second %-sign in the format string
        // arg++	                Optional. The argument to be inserted at the third, fourth, etc. %-sign in the format string

    echo "<br>";

    // implode() -
    // function returns a string from the elements of an array.
    // Note: The implode() function accept its parameters in either order. However, for consistency with explode(), you should use the documented order of arguments.
    // Note: The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.
    // Note: This function is binary-safe.
    $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(" ",$arr);

    echo "<br>";

    // join() -
    // function returns a string from the elements of an array.
    // The join() function is an alias of the implode() function.
    // Note: The join() function accept its parameters in either order. However, for consistency with explode(), you should use the documented order of arguments.
    // Note: The separator parameter of join() is optional. However, it is recommended to always use two parameters for backwards compatibility.
    echo join(" ",$arr)."<br>";
    echo join("+",$arr)."<br>";
    echo join("-",$arr)."<br>";
    echo join("X",$arr);

    echo "<br>";

    // ltrim() -
    // function removes whitespace or other predefined characters from the left side of a string.
    // Related functions:
        // rtrim() - Removes whitespace or other predefined characters from the right side of a string
        // trim() - Removes whitespace or other predefined characters from both sides of a string
    echo $str . "<br>";
    echo ltrim($str,"Hello");
        // Parameter        Value
        // Parameter	    Description
        // string	        Required. Specifies the string to check
        // charlist	    Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
        //                     "\0" - NULL
        //                     "\t" - tab
        //                     "\n" - new line
        //                     "\x0B" - vertical tab
        //                     "\r" - carriage return
        //                     " " - ordinary white space
    
    echo "<br>";
    
    // print() -
    // function outputs one or more strings. 
    // Note: The print() function is not actually a function, so you are not required to use parentheses with it.
    // Tip: The print() function is slightly slower than echo().
    print "Hello world!";

    echo "<br>";

    // printf() -
    // function outputs a formatted string.
    // The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string. This function works "step-by-step". At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc.
    // Note: If there are more % signs than arguments, you must use placeholders. A placeholder is inserted after the % sign, and consists of the argument- number and "\$". See example two.
    // Tip: Related functions: sprintf(), vprintf(), vsprintf(), fprintf() and vfprintf()
    printf("There are %u million bicycles in %s.",$number,$str3);

    echo "<br>";

    // sprintf()
    $txt = sprintf("%f",$number);
    echo $txt;

    echo "<br>";

    // sscanf() -
    // function parses input from a string according to a specified format. The sscanf() function parses a string into variables based on the format string.
    // If only two parameters are passed to this function, the data will be returned as an array. Otherwise, if optional parameters are passed, the data parsed are stored in them. If there are more specifiers than variables to contain them, an error occurs. However, if there are less specifiers than variables, the extra variables contain NULL.
    $str4 = "age:30 weight:60kg";
    sscanf($str4,"age:%d weight:%dkg",$age,$weight);
    // show types and values
    var_dump($age,$weight);

    echo "<br>";

    // str_ireplace() -
    // function replaces some characters with some other characters in a string.
    // This function works by the following rules:
    // If the string to be searched is an array, it returns an array
    // If the string to be searched is an array, find and replace is performed with every array element
    // If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
    // If find is an array and replace is a string, the replace string will be used for every find value
    // Note: This function is case-insensitive. Use the str_replace() function to perform a case-sensitive search.
    // Note: This function is binary-safe.
    echo str_ireplace("WORLD","Peter","Hello world!");
        // Parameter   Values
        // Parameter	Description
        // find	    Required. Specifies the value to find
        // replace	    Required. Specifies the value to replace the value in find
        // string	    Required. Specifies the string to be searched
        // count	    Optional. A variable that counts the number of replacements

    echo "<br>";

    // str_replace() -
    // function replaces some characters with some other characters in a string.
    // This function works by the following rules:
    // If the string to be searched is an array, it returns an array
    // If the string to be searched is an array, find and replace is performed with every array element
    // If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
    // If find is an array and replace is a string, the replace string will be used for every find value
    // Note: This function is case-sensitive. Use the str_ireplace() function to perform a case-insensitive search.
    echo str_replace("world","Peter","Hello world!");

    echo "<br>";

    // str_shuffle() -
    // function randomly shuffles all the characters of a string.
    echo str_shuffle("Hello World");

    echo "<br>";

    // str_split() -
    // function splits a string into an array.
    print_r(str_split("Hello"));

    echo "<br>";

    // str_word_count() -
    // function counts the number of words in a string.
    echo str_word_count("Hello world!");

    echo "<br>";

    // strcasecmp() -
    // function compares two strings.
    // Tip: The strcasecmp() function is binary-safe and case-insensitive.
    // Tip: This function is similar to the strncasecmp() function, with the difference that you can specify the number of characters from each string to be used in the comparison with strncasecmp().
    echo strcasecmp("Hello world!","HELLO WORLD!");

    echo "<br>";

    // strcmp() -
    // function compares two strings.
    // Note: The strcmp() function is binary-safe and case-sensitive.
    // Tip: This function is similar to the strncmp() function, with the difference that you can specify the number of characters from each string to be used in the comparison with strncmp().
    echo strcmp("Hello world!","Hello world!");

    echo "<br>";

    // strchr() -
    // function searches for the first occurrence of a string inside another string.
    // This function is an alias of the strstr() function.
    // Note: This function is binary-safe.
    // Note: This function is case-sensitive. For a case-insensitive search, use stristr() function.
    echo strchr("Hello world!","world");

    echo "<br>";

    // strcspn() -
    // function returns the number of characters (including whitespaces) found in a string before any part of the specified characters are found.
    // Tip: Use the strspn() function to the number of characters found in the string that contains only characters from a specified character list.
    echo strcspn("Hello world!","w");

    echo "<br>";

    // strip_tags() -
    // function strips a string from HTML, XML, and PHP tags.
    echo strip_tags("Hello <b>world!</b>");

    echo "<br>";

    // strlen()
    echo strlen("hello");

    echo "<br>";

    // strpos() -
    // function finds the position of the first occurrence of a string inside another string.
    // Note: The strpos() function is case-sensitive.
    // Note: This function is binary-safe.
    // Related functions:
        // strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
        // stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
        // strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
    echo strpos("I love php, I love php too!","php");
        // Parameter   Values
        // Parameter	Description
        // string	    Required. Specifies the string to search
        // find	    Required. Specifies the string to find
        // start	    Optional. Specifies where to begin the search. If start is a negative number, it counts from the end of the string.

    echo "<br>";

    // strrev()
    echo strrev("Hello World!");

    echo "<br>";

    // strtolower()
    echo strtolower("Hello WORLD.");
    
    echo "<br>";

    // strtoupper()
    echo strtoupper("Hello WORLD!");

    echo "<br>";

    // substr() -
    // function returns a part of a string.
    echo substr("Hello world",6);

?>