# Twenty Twenty-Four

Welcome to the development repository for the default theme that will launch with WordPress 6.4.

## About

Twenty Twenty-Four is built as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

## Contributing

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentyfour/issues) is a great place to start looking for tasks. [Pull requests](https://github.com/WordPress/twentytwentyfour/pulls) are preferred when linked to an existing issue.

Contributing is not just for developers! There are many opportunities to help with [testing](#getting-started), triage, discussion, design, building patterns and templates, and more. Please look through [open issues](https://github.com/WordPress/twentytwentyfour/issues), and join in wherever you feel most comfortable.

If you'd like to help with triage, let @luminuu and @MaggieCabrera know here or in [WordPress.org's Slack instance](https://make.wordpress.org/chat/). We'll help you get set up with the ability to add labels to issues and PRs.

### Getting Started

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to docker. Alternatively you can use [WordPress Playground](https://developer.wordpress.org/playground/) to test the theme directly in the browser.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory.

### Tips for Contributors

- As stated above, a goal for the theme is to have as little CSS as possible. Much of the theme's visual treatments should be handled by the Block Editor and Global Styles. As a general rule, if multiple themes would benefit from the CSS you're considering adding, it might reasonably be provided by Gutenberg instead. Let's include clear code comments for any CSS we do include.
- Similarly, let's refrain from building any custom-built PHP or JavaScript-based workarounds for functionality that might reasonably be provided by the Block Editor, let's keep the code simple to help with future maintenance.
- In accordance to those last two bullets, this theme has no required build process.
- If you've helped contribute to the theme in any way, you deserve credit! Folks will be updating [CONTRIBUTORS.md](CONTRIBUTORS.md) periodically with names of contributors, but feel free to open a PR or issue if we leave someone out.

## Requirements

- Gutenberg plugin (latest)
- WordPress 6.4+
- PHP 7.0+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require Gutenberg trunk and will be described or tagged accordingly.

### Testing

Optionally, to run tests locally, you will also need:

- [Node.js](https://nodejs.org/en/)
  - It's recommended that you install Node through [nvm](https://github.com/nvm-sh/nvm#intro), since it's the tool used by the CLI to select the node version being used.
- [Composer](https://getcomposer.org/)

You can install the test-specific development dependencies by running `npm i && composer install`. The following test commands are then available:

- `npm run lint:css` lints and autofixes where possible the CSS
- `composer run analyze [filename.php]` statically analyzes PHP for bugs
- `composer run lint` checks PHP for syntax errors
- `composer run standards:check` checks PHP for standards errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` attemps to automatically fix errors

## Resources

- [Twenty Twenty-Four Figma Mockups](https://www.figma.com/file/AlYr03vh4dVimwYwQkTdf6/Twenty-Twenty-Four?type=design&node-id=16%3A14852&mode=design&t=yad81XRtp200JLes-1)
- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Timeline

The theme will be released with WordPress 6.4 and follow the key dates / milestones associated with [its development schedule](https://make.wordpress.org/core/6-4).
