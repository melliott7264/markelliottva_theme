# Personal Website for Mark Elliott - markelliottva.com

## Description

This is new WordPress child theme of Understrap for Mark Elliott's personal website at www.markelliottva.com. This site will have a fully custom front page with a hero carousel written in jQuery.

## Table of Contents (Optional)

If your README is long, add a table of contents to make it easy for users to find what they need.

- [Installation](#installation)
- [Usage](#usage)
- [Credits](#credits)
- [License](#license)

## Installation

The steps to install this theme are as follows:

1. Put production site into maintenance mode.
2. Update all plugins on development and production
3. Update WordPress to same version on production as development
4. Backup production database
   - a. document production site URL
5. Copy markelliottva and understrap themes to live site.
6. Copy all new (since December 2022) uploads to live site.
7. Backup development database.
8. Import development database into production site.
9. Edit imported database
   - a. change development site URL to production site URL.
10. Change administrator password on production site
11. Make sure there is a backup administrator account
12. Use Velvet Blues plugin to update links on production WordPress site from markelliottvapersonal.local to markelliottva.com

## Usage

Updates to the carousel are made in the in the heroContentArray of the carousel.js file in the root of the theme folder. Otherwise, all posts and pages are updated through the standard WordPress admin dashboard.

## Credits

Mark Elliott https://github.com/melliott7264

## License

Copyright (c) 2023 Mark Elliott

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

---

🏆 The previous sections are the bare minimum, and your project will ultimately determine the content of this document. You might also want to consider adding the following sections.

## Badges

![badmath](https://img.shields.io/github/languages/top/lernantino/badmath)

Badges aren't necessary, per se, but they demonstrate street cred. Badges let other developers know that you know what you're doing. Check out the badges hosted by [shields.io](https://shields.io/). You may not understand what they all represent now, but you will in time.

## Features

If your project has a lot of features, list them here.

## How to Contribute

If you created an application or package and would like other developers to contribute it, you can include guidelines for how to do so. The [Contributor Covenant](https://www.contributor-covenant.org/) is an industry standard, but you can always write your own if you'd prefer.

## Tests

Go the extra mile and write tests for your application. Then provide examples on how to run them here.
