# whoisharrison
this is my all new portfolio site

# Milestone1 

# feedback
Purpose, audience, goals and persona are spot on. It seems that use case is just an extension of your persona. You are also missing a couple of things in the html. 
 
## Clarifications/ corrections

Your  use case missed the mark. You did not outline how someone would interact with your site. You gave no picture of how your site would look or behave.

The HTML is also incomplete you have no <html> tags. The <html="en"> tag is missing so is the <meta charset="utf-8">. 

## Update 

great job on the revisions. All the previous concerns have been addressed and it is very easy to see how someone would interact with your site. Also The HTML is correct great job

### Milestone1 grade TierIV https://bootcamp-coders.cnm.edu/projects/personal/rubric/

If you would like you can resubmit milestone1 on monday for a higher grade if you fix the mistakes I laid out.

# Milestone 2a 

## Feedback

Great attempt at Milestone2a. There are a few errors in your HTML that I will go into detail later. The overall content strategy is solid. Highlighting the skills you have acquired during the Bootcamp should be easy to accomplish and should stand out to future employees. I recommend that you upload your resume to the site and have it be downloaded when someone clicks the resume link on your navbar. For your portfolio using something like fancy-box to display your previous projects would work well and would look great in the mobile view.  the portfolio section now would be very small and not user-friendly.  I love the idea of having the navbar at the bottom and can not wait to see how it turns out. Font awesome should have all the icons you need for your dev abilities. I also recommend having a short about me. 

## Fixes

your Html needs clean up you have no header and no closing Html tag.  I also recommend putting your images in an image directory, doing so gives you a cleaner directory structure.

http://fancyapps.com/fancybox/3/http://fancyapps.com/fancybox/3/

### Grade Tier III feel free to start working on 2 beta

## Milestone 2&beta; Feedback
Great work so far. Milestone 2&beta; passes at Tier IV. Feedback left via Slack.

## Milestone 3 / Final PWP Evaluation
You've done an excellent job in creating an engaging, feature and content-rich PWP. You've put a lot of thought and care into crafting this site - and your code reflects a high standard. Well done.

Based on the level of quality in your work, you are probably ready to explore more challenging Front End projects such as CMS custom theme creation and/or further integration with JS frameworks such as Angular and React. The creation of custom Bootstrap builds and CSS Preprocessors such as LESS and SASS are also fun areas to explore too.

There are a few technical glitches though, the biggest one being that your contact form isn't working - and I'm pretty sure I know why... You have `id="contact-form"` declared twice! Once on line 158, and again on your &lt;form&gt; tag! What's happening is the first instance of the id is being passed into the `.validate` function... and that will bork it good. Rename the id on line 158, and you should be in business! See the Edits &amp; Suggestions section below for additional technical points.

Overall, you've done very nice work on this project. I'd definitely polish things up a bit before sending this site out to employers - but they are all pretty minor fixes. Your Milestone 3/Final Delivery for PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

Your overall passing grade across all of your PWP Milestones is [28/40 points (70%)](https://bootcamp-coders.cnm.edu/projects/personal/rubric/#sample-score).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier III 30(0.2) = 6
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier II 20(0.5) = 10

## Edits &amp; Suggestions
- You have jQuery loaded twice. I'd delete line 34.
- Small technicality, but line 4 in your `.gitignore` needs to be `/node_modules`
- Rename the id on line 158 to get your contact form working right.
- You don't need `autoload.php` in your /php directory. That's meant for autoloading classes, and the only autoloader you need is in your /vendor directory.
- I'd consider making your logos at the bottom clickable.
- An SEO-friendlier practice for your subpages would be to create them in appropriately named subdirectories of their own, and create the page as an `index.php` file inside. This way, your URLs will look like this: http://www.michaelharrisonwebdev.com/resume and not this: http://www.michaelharrisonwebdev.com/resume.php
- Don't forget the `alt` attribute on your images!
- You'll want to update your "Home" link to just a '/' on your live deployment. "michaelharrisonwebdev.com" isn't going to work correctly.
- Ideally, I wouldn't open internal links in a new tab... but in the same tab. I'd remove the `target="_blank"` attribute from those links, like "Resume"... and I would double check the links in your other navbars... but about that...
- ...there's a better way to keep things DRY than having to repeat the navbar on your other pages. You can use the php `require_once();` function to include a separate navbar file. Then have a look at the [PHP Relative Path](https://bootcamp-coders.cnm.edu/class-materials/php/relative-path/) solution.
- The *how-hard-could-it-be* page isn't mobile friendly at all... but it wouldn't take much to get it there.
- I'd consider changing up the text color in the button.
- There are a lot of repeated Git commit messages... especially early on in the project. Small thing, but it's important regarding good version control practices.
