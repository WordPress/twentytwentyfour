# Twenty Twenty-Four

Welcome to the development repository for the default theme that will launch with [WordPress 6.4](https://make.wordpress.org/core/6-4/).

<img width="1920" alt="2023" src="https://github.com/WordPress/twentytwentyfour/assets/1813435/d965b75d-03cd-4365-b963-b3862d482329">

Twenty Twenty-Four is built as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

You can view a demo of this theme at [2024.wordpress.net](https://2024.wordpress.net/), which is synced to `trunk` branch of this repository every 2 minutes.

## Contributing

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentyfour/issues) is a great place to start looking for tasks — but contributing is not just for developers. There are many opportunities to help with testing, triage, discussion, design, building [patterns](https://github.com/WordPress/twentytwentyfour/issues?q=is%3Aissue+is%3Aopen+label%3A%22%5BComponent%5D+Block+Patterns%22) and templates, and more. 

If you'd like to help with triage, let @luminuu and @MaggieCabrera know in [WordPress.org's Slack instance](https://make.wordpress.org/chat/). We'll help you get set up with the ability to add labels to issues and PRs.

## Getting Started

### Development

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to docker. Alternatively you can use [WordPress Playground](https://developer.wordpress.org/playground/) to test the theme directly in the browser.
2. Clone / download this repository into your `/wp-content/themes/` directory.
3. Install and activate the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/).

### Design

The theme is designed in [Figma](https://www.figma.com/file/AlYr03vh4dVimwYwQkTdf6/Twenty-Twenty-Four?type=design&t=C79166eDp3vX7OOD-6). You can contribute by designing one of the [patterns](https://github.com/WordPress/twentytwentyfour/issues?q=is%3Aissue+is%3Aopen+label%3A%22%5BComponent%5D+Block+Patterns%22) planned for Twenty Twenty-Four. 

As a default WordPress theme, it is important to leverage the existing design system wherever possible. That is the font sizes, [color palette choices](https://github.com/WordPress/twentytwentyfour/pull/106), and [spacing presets](https://github.com/WordPress/twentytwentyfour/pull/102). All patterns and templates will leverage this systems extensively. 

## Token Cheat-sheet

### Colors

| Figma Token | CSS Variable | `color` | `name` | `slug` | image |
|------------|-----------------------------|-----------|------|--------|----------------------------------------------------------|
| `Base/One` | `--wp--preset--color--base` | `#f9f9f9` | Base | `base` | ![#f9f9f9](https://placehold.co/15x15/f9f9f9/f9f9f9.png) |
| `Base/Two` | `--wp--preset--color--base-2` | `#ffffff` | Base / Two | `base-2` | ![#ffffff](https://placehold.co/15x15/ffffff/ffffff.png) |
| `Base/Three` | `--wp--preset--color--base-3` | `#00000025` | Base / Three | `base-3` | ![#00000025](https://placehold.co/15x15/00000025/00000025.png) |
| `Contrast/One` | `--wp--preset--color--contrast` | `#222222` | Contrast | `contrast` | ![#222222](https://placehold.co/15x15/222222/222222.png) |
| `Contrast/Two` | `--wp--preset--color--contrast-2` | `#636363` | Contrast / Two | `contrast-2` | ![#636363](https://placehold.co/15x15/636363/636363.png) |
| `Contrast/Three` | `--wp--preset--color--contrast-3` | `#a4a4a4` | Contrast / Three | `contrast-2` | ![#a4a4a4](https://placehold.co/15x15/a4a4a4/a4a4a4.png) |
| `Accent/One` | `--wp--preset--color--accent` | `#cfcabe` | Accent | `accent` | ![#cfcabe](https://placehold.co/15x15/cfcabe/cfcabe.png) |
| `Accent/Two` | `--wp--preset--color--accent-2` | `#c2a990` | Accent / Two | `accent-2` | ![#c2a990](https://placehold.co/15x15/c2a990/c2a990.png) |
| `Accent/Three` | `--wp--preset--color--accent-3` | `#d8613c` | Accent / Three | `accent-3` | ![#d8613c](https://placehold.co/15x15/d8613c/d8613c.png) |
| `Accent/Four` | `--wp--preset--color--accent-4` | `#b1c5a4` | Accent / Four | `accent-4` | ![#b1c5a4](https://placehold.co/15x15/b1c5a4/b1c5a4.png) |
| `Accent/Five` | `--wp--preset--color--accent-5` | `#b5bdbc` | Accent / Five | `accent-5` | ![#b5bdbc](https://placehold.co/15x15/b5bdbc/b5bdbc.png) |

### Layout presets

| `theme.json` preset | `theme.json` value |
|---------------|---------|
| `contentSize` | `620px` |
| `wideSize`    | `1280px` |

### Spacing presets

| Figma Token | CSS Variable | `theme.json` value | `theme.json` slug |
|---------|------|-------|------|
| `Spacing/10` | `--wp--preset--spacing--10` | `min(1rem, 2vw)` | `10` |
| `Spacing/20` | `--wp--preset--spacing--20` | `min(1.5rem, 3vw)` | `20` |
| `Spacing/30` | `--wp--preset--spacing--30` | `min(2.5rem, 5vw)` | `30` |
| `Spacing/40` | `--wp--preset--spacing--40` | `min(4rem, 8vw)` | `40` |
| `Spacing/50` | `--wp--preset--spacing--50` | `min(6.5rem, 13vw)` | `50` |
| `Spacing/60` | `--wp--preset--spacing--60` | `min(10.5rem, 24vw)` | `60` |

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
