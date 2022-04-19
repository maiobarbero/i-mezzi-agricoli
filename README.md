# Patronus

## Dev

`npm start`

## Build

`npm run build`

## To use images in css:

`background-image: resolve('test.jpg')`

To correct the dimensions for images with a high density, pass it as a second parameter:

<pre>
    body {
        width: width('images/foobar.png', 2); /* 160px */
        height: height('images/foobar.png', 2); /* 120px */
        background-size: size('images/foobar.png', 2); /* 160px 120px */
    }
</pre>

## TODO

- group media queries
