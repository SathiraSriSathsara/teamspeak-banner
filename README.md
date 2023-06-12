# teamspeak-banner
This PHP code generates a dynamic image by combining background images and overlaying a top image. It also applies text to the image using TrueType fonts. The resulting image is then outputted as a PNG file.

## Requirements

- PHP 5.4 or above
- A directory containing background images in PNG format
- A top image in PNG format
- TrueType fonts for applying text to the image

## Usage 

1. Set the `$backgroundDirectory` variable to the directory path where your background images are located. Make sure the images in the directory are in PNG format.
2. Place your top image in the `images/` directory.
3. Customize the text applied to the image by modifying the `imagettftext()` function parameters.
4. Ensure that the necessary TrueType font files are available and specify the font file path in the `imagettftext()` function.
5. Configure your web server to process PHP files.
6. Access the PHP script through a web browser or use it as an endpoint to retrieve the generated image.
