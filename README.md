Nike-Bot
========
---------------------


Just a bit of JS + PHP that, when loaded as a Chrome extension, aids in automating the first two steps of purchasing limited shoe releases from [Nike](http://nike.com) via [Twitter](http://www.twitter.com). 

After clicking the [@nikestore](http://twitter.com/nikestore) release link, the specified shoe size and amount are automatically added to your cart. 

These two values are set inside [autocart.js](/chrome-extension/autocart.js).

        var size = "12";
        var amount = 1;

Automating the first two steps of picking a size and amount doesn't seem very useful, but when limited release URLs are being hit by literally millions of people at once every second counts.

> Nike's newest release platform is Twitter, sending out unique direct purchase URLs for each of its limited shoe releases to millions of thirsty sneakerheads around the globe. Some people started selling a "program" that would automatically add pairs to the user's cart that would "work on both Mac and PC". :/ 

> This made me think that it was probably just a simple piece code that sets the size and amount values upon page load. This, coupled with the fact that they were selling it for $50-100 apiece, made me think I could write my own. Thus, nike-bot!



Set Up
---------------------

1. Fork the repo or, if you're not using git, [download the .ZIP](http://github.com/bdkay/nike-bot/archive/master.zip).
2. Unzip [master.zip](http://github.com/bdkay/nike-bot/archive/master.zip). It contains 1 folder, master-nike-bot.
2. Open Google Chrome. 
3. Go to Settings > Extensions. Tick the box next to 'Developer mode'.
4. Click on 'Load Packed Extension' button to the left.
5. Double click nike-master-bot, then chrome-extension, then autocart.js. This will load it as a Chrome extension.

That's it! Now just click on a [@nikestore](http://twitter.com/nikestore) release link and watch it do its thing.

### If you edit [autocart.js](/chrome-extension/autocart.js) at all, such as modifying the size or amount values, you'll have to go back into Chrome > Settings > Extensions and click 'Reload' under nike-bot.
