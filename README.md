# ff-to-object

Simple PHP script that converts a delimited flat file to an object. Plug this in your scripts appropriately and enjoy!
      
## Example:
You want to make an object from a file so you can use that data in your script. It is a flat-file containing widget information.

1. To begin, the first line of the file must contain the column headers.
2. Then, specify the $path. Here I'll just use YOUR_PATH but obviously you'll need to set yours correctly.
    
    `$path = YOUR_PATH;`
      
3. Next, set $type. This really is just a directory, after the $path, that your file lives in. Since we're using widgets we can just use "widgets".
    
    `$type = 'widgets';`
    
4. Last, set the file name. I'll use widget_data.txt.
    
    `$name = 'widget_data.txt';`
    
That comes together as:
    
    YOUR_PATH\widgets\widgets_data.txt
    
This should be the location of the file you are using.
      
#### Parameters:

*required*:

**$name** = any delimited file name

**$type** = contents of file data, i.e. products, orders, customers, widgets, etc. (MUST correspond to a directory where the file in $name is located.)
    
*defaults*:

**$path** = YOUR_PATH (can be constant or hard-coded default or whatever.)

**$delim** = | (pipe)
    
*options*:

**$path** = any path you want, yo

**$delim** = any character
      
Feel free to modify. For instance, you may not need $type. I did for my usage, but you can accomplish the same just by setting $path directly.
  
Enjoy!