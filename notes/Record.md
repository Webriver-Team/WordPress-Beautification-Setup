# Beautification Processes Record

* TODO: ASAP
* [ ] Check the `.linthtmlrc.js` file and sort the rules by Alphabetical order, only 4-8 maybe are not in order
* [ ] Check the `.linthtmlrc.js` file and see if any rule is missing from https://github.com/linthtml/linthtml/tree/develop/lib/rules


* TODO: Long Run
* [ ] Check if indent Size conflicts for each type of file after Extensions are enabled and other linting is added from external sources like phpcbf.
* [ ] Check if MD files have no trailing whitespace after Extensions are enabled and other linting is added from external sources.
* [ ] Check if all files have Linux based LF line endings not CRLF windows based line endings. Manages at 2 places EditorConfig and VSCode settings ("files.eol": "\n",)
* [X] ~~*EditorConfig settings for package.json - Space size is not working*~~ [2021-11-11]
* [ ] Check for HTML if the 'line-no-trailing-whitespace' rule of linthtmlrc makes conflict with any others like Prettier, VSCode settings or any other plugin/settings.
* [ ] Implement and install VSCode extenstion [HTML CSS Support](https://marketplace.visualstudio.com/items?itemName=ecmel.vscode-html-css)

* FIXME:
* [ ] Trailing space for all MD Files should not be present - It is managed at 2 places, EditorConfig file and VSCode settings ("files.trimTrailingWhitespace": false).
* [ ] Updating the packages in `package.json` file using `npm update` doesn't updates the latest versions in `package.json` file itself. It will still stay outdated when the command `npm update` will be used. https://i.imgur.com/qY1huTL.png
* [ ] Cannot set the value `"no-empty-source": false,` for `stylelintrs.json` file. Gives error that this method is not accepted, use null instead. https://i.imgur.com/49GuAGX.png
* [ ] Cannot set the value `""length-zero-no-unit": false,` for `stylelintrs.json` file. Gives error that this method is not accepted, use null instead. https://i.imgur.com/49GuAGX.png

* TODO: - Work later on
* [ ] https://github.com/remarkjs/remark-lint#install
* [ ] [Research on formatting toggle](https://marketplace.visualstudio.com/items?itemName=tombonnike.vscode-status-bar-format-toggle)
* [ ] [Use settings from this article after each extension and settings have been added - Finalization Task](https://medium.com/@bretcameron/the-2019-guide-to-beautifying-visual-studio-code-32470910fc5b#a116)
* [ ] Setup NPM LintHTML gulp function - https://stackoverflow.com/questions/41828016/how-to-enable-lint-on-html-in-vs-code
* [ ] Make a Pull Request to https://github.com/linthtml/linthtml/tree/develop/lib/rules/link-min-length-4 and make the ending of a tags better. These are not ending properly
* [ ] Give proper property value for attr-order in `linthtml.json` file. Current value not being accepted is below.
``` json
"attr-order": [
		"error",
		[
			"id",
			"class"
		]
	],
```
* [ ] The Head and Body tag don't get indented as child of HTML tag. That causes issues of tab for linthtmlrc. Currently `"indent-width": 0` is set to 0 to avoid error on any level.
* [ ] How to format all files that start with `.` for example `.eslintrc`, `.prettiersrc` etc
* [ ] Add [Stickler](https://stickler-ci.com/docs) into github repo as a check when repo is pushed.
* [ ] Added `example\scss.scss` file into `.prettierignore` file so that i can record all possible errors in this files.
* [ ] Added `example\css.css` file into `.prettierignore` file so that i can record all possible errors in this files.

TODO: - Things currently not implemented - Requires research
* [ ] Stylelint - `function-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/function-allowed-list/)
* [ ] Stylelint - `function-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/function-disallowed-list/)
* [ ] Stylelint - `function-url-scheme-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/function-url-scheme-allowed-list/)
* [ ] Stylelint - `function-url-scheme-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/function-url-scheme-disallowed-list/)
* [ ] Stylelint - `time-min-milliseconds` function at [this link](https://stylelint.io/user-guide/rules/list/time-min-milliseconds/)
* [ ] Stylelint - `unit-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/unit-allowed-list/)
* [ ] Stylelint - `unit-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/unit-disallowed-list/)
* [ ] Stylelint - `shorthand-property-no-redundant-values` function is set to track the error but it is nor working docs at [this link](https://stylelint.io/user-guide/rules/list/shorthand-property-no-redundant-values/)
* [ ] Stylelint - `declaration-no-important` function is set to track the error but it is nor working docs at [this link](https://stylelint.io/user-guide/rules/list/declaration-no-important/)
* [ ] Stylelint - `custom-property-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/custom-property-pattern/)
* [ ] Stylelint - `property-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/property-allowed-list/)
* [ ] Stylelint - `property-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/property-disallowed-list/)
* [ ] Stylelint - `declaration-property-unit-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/declaration-property-unit-allowed-list/)
* [ ] Stylelint - `declaration-property-unit-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/declaration-property-unit-disallowed-list/)
* [ ] Stylelint - `declaration-property-value-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/declaration-property-value-allowed-list/)
* [ ] Stylelint - `declaration-property-value-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/declaration-property-value-disallowed-list/)
* [ ] Stylelint - `selector-attribute-name-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-attribute-name-disallowed-list/)
* [ ] Stylelint - `selector-attribute-operator-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-attribute-operator-allowed-list/)
* [ ] Stylelint - `selector-attribute-operator-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-attribute-operator-disallowed-list/)
* [ ] Stylelint - `selector-class-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/selector-class-pattern/)
* [ ] Stylelint - `selector-combinator-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-combinator-allowed-list/)
* [ ] Stylelint - `selector-combinator-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-combinator-disallowed-list/)
* [ ] Stylelint - `selector-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-disallowed-list/)
* [ ] Stylelint - `selector-id-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/selector-id-pattern/)
* [ ] Stylelint - `selector-max-attribute` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-attribute/)
* [ ] Stylelint - `selector-max-class` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-class/)
* [ ] Stylelint - `selector-max-combinators` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-combinators/)
* [ ] Stylelint - `selector-max-compound-selectors` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-compound-selectors/)
* [ ] Stylelint - `selector-max-id` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-id/)
* [ ] Stylelint - `selector-max-pseudo-class` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-pseudo-class/)
* [ ] Stylelint - `selector-max-specificity` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-specificity/)
* [ ] Stylelint - `selector-max-type` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-type/)
* [ ] Stylelint - `selector-max-universal` function at [this link](https://stylelint.io/user-guide/rules/list/selector-max-universal/)
* [ ] Stylelint - `selector-nested-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/selector-nested-pattern/)
* [ ] Stylelint - `selector-pseudo-class-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-pseudo-class-allowed-list/)
* [ ] Stylelint - `selector-pseudo-class-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-pseudo-class-disallowed-list/)
* [ ] Stylelint - `selector-pseudo-element-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-pseudo-element-allowed-list/)
* [ ] Stylelint - `selector-pseudo-element-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/selector-pseudo-element-disallowed-list/)
* [ ] Stylelint - `selector-pseudo-element-colon-notation` function at [this link](https://stylelint.io/user-guide/rules/list/selector-pseudo-element-colon-notation/)
* [ ] Stylelint - `rule-selector-property-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/rule-selector-property-disallowed-list/)
* [ ] Stylelint - `media-feature-name-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/media-feature-name-allowed-list/)
* [ ] Stylelint - `media-feature-name-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/media-feature-name-disallowed-list/)
* [ ] Stylelint - `media-feature-name-value-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/media-feature-name-value-allowed-list/) - **This maybe a good solution for some problems**
* [ ] Stylelint - `custom-media-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/custom-media-pattern/)
* [ ] Stylelint - `at-rule-allowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/at-rule-allowed-list/)
* [ ] Stylelint - `at-rule-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/at-rule-disallowed-list/)
* [ ] Stylelint - `at-rule-property-required-list` function at [this link](https://stylelint.io/user-guide/rules/list/at-rule-property-required-list/)
* [ ] Stylelint - `comment-pattern` function at [this link](https://stylelint.io/user-guide/rules/list/comment-pattern/)
* [ ] Stylelint - `comment-word-disallowed-list` function at [this link](https://stylelint.io/user-guide/rules/list/comment-word-disallowed-list/) ***This can be used to filter our names of people working here. So that no one will be able to add their name to the list***
* [ ] Stylelint - `max-nesting-depth` function at [this link](https://stylelint.io/user-guide/rules/list/max-nesting-depth/)
* [ ] Stylelint - `color-hex-case` function at [this link](https://stylelint.io/user-guide/rules/list/color-hex-case/)
* [ ] Stylelint - `color-hex-length` function at [this link](https://stylelint.io/user-guide/rules/list/color-hex-length/)
* [ ] Stylelint - `font-family-name-quotes` function at [this link](https://stylelint.io/user-guide/rules/list/font-family-name-quotes/)
* [ ] Stylelint - `function-comma-newline-after` function at [this link](https://stylelint.io/user-guide/rules/list/function-comma-newline-after/)
* [ ] Stylelint - `function-comma-newline-before` function at [this link](https://stylelint.io/user-guide/rules/list/function-comma-newline-before/)

TODO: - Values need to be changed in each project
* [ ] Stylelint - `keyframes-name-pattern` in **.stylelintrc.json** file currently contains word ***foo-*** in it. Change it to name of current project E.g. ***engageware-***

## Ligatures

* [X] ~~*Firacode font is used so that if you want `===` to look more like `≡`, `>=` to look more like `⩾`, or `!==` to look more like `≠`. [FiraCode Github](https://github.com/tonsky/FiraCode)*~~ [2021-11-11]

## VSCode Extensions

### 🚧 Extensions installed but it's settings not properly test and added to vscode settings

* [ ] [IntelliSense for CSS class names in HTML](https://marketplace.visualstudio.com/items?itemName=Zignd.html-css-class-completion)
* [ ] [CSS Peek](https://marketplace.visualstudio.com/items?itemName=pranaygp.vscode-css-peek)
* [ ] [Better Comments](https://marketplace.visualstudio.com/items?itemName=aaron-bond.better-comments)

### ✔️ Extensions installed and properly tested their settings and added required fields to vscode settings.




## .EditorConfig

* [X] ~~*Set charset to UTF-8 for all files*~~ [2021-11-11]
* [X] ~~*Indent Style - Set to tab*~~ [2021-11-11]
* [X] ~~*Indent Size - Set to 4 for all type of files approx - (Need to check this )*~~ [2021-11-11]
* [X] ~~*[Don't use tabs in MD](https://arcticicestudio.github.io/styleguide-markdown/rules/whitespace.html)*~~ [2021-11-11]
* [X] ~~*[Don't use trailing whitespace to generate a line break](https://arcticicestudio.github.io/styleguide-markdown/rules/whitespace.html#trailing)*~~ [2021-11-11]
* [X] ~~*[End files with a single newline character. Always use unix-style LF linebreaks (\n, denoted as ␊) and avoid the usage of Microsoft Windows CRLF characters (\r\n, denoted as ␍␊).](https://arcticicestudio.github.io/styleguide-markdown/rules/whitespace.html#newline)*~~ [2021-11-11]
* [X] ~~*[End files with a single newline character](https://arcticicestudio.github.io/styleguide-markdown/rules/whitespace.html#newline)*~~ [2021-11-11]
* [X] ~~*package.json file is formatted as by rules of it's own.*~~ [2021-11-11]

## Prettier

* [X] ~~*Ignore ***vscode-test/*** form prettier being styled*~~ [2021-11-11]
* [X] ~~*Ignore ***out/*** form prettier being styled*~~ [2021-11-11]
* [X] ~~*Ignore ***dist/*** form prettier being styled*~~ [2021-11-11]
* [X] ~~*Ignore ***test-fixtures/*** form prettier being styled*~~ [2021-11-11]
* [X] ~~*Ignore ***node_modules/*** form prettier being styled*~~ [2021-11-11]
* [X] ~~*Create the `.prettierrc` file*~~ [2021-11-15]
* [X] ~~*Set values for the options of Prettier [Options](https://prettier.io/docs/en/options.html)*~~ [2021-11-15]

### CSS / SCSS

These are set of rules that are required as WordPress coding standards.

* [X] ~~*Use tabs, not spaces, to indent each property.*~~ [2021-11-15]
* [X] ~~*Add two blank lines between sections and one blank line between blocks in a section.*~~ [2021-11-15]
* [X] ~~*Each selector should be on its own line*~~ [2021-11-15]
* [X] ~~*Each selector should be ending in either a comma or an opening curly brace*~~ [2021-11-15]
* [X] ~~*Property-value pairs should be on their own line*~~ [2021-11-15]
* [ ] Property-value pairs should be with one tab of indentation (Currently one space is being added by Prettier)
* [X] ~~*Property-value pairs should be have an ending semicolon*~~ [2021-11-15]
* [X] ~~*The closing brace should be flush left, using the same level of indentation as the opening selector*~~ [2021-11-15]

## Matching Bracket Colours

* [X] ~~*[Bracket Pair Colorizer 2](https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer-2)When you have a lot of parentheses, square brackets and braces, it can be difficult to see where each block of code opens and closes. The Bracket Pair Colorizer by Coenraads solves this problem.*~~ [2021-11-11]

## HTML Lint

* [X] ~~*Add [LintHTML plugin](https://marketplace.visualstudio.com/items?itemName=kamikillerto.vscode-linthtml) to VSCode*~~ [2021-11-11]
* [X] ~~*Add `@linthtml/linthtml` using npm packages and saving it into package.json file.  `npm install @linthtml/linthtml --save-dev`*~~ [2021-11-11]
* [X] ~~*Add `.linthtmlrc` file to project using:*~~ [2021-11-11]
  * npx linthtml --init
  * Javascript
  * Legacy (inherited from HTMLLint)

### HTML Test file

* Test file containing all the rules that can be tested in Linting HTML are added and the file has been created at `example\HTMl - Test file.html` location.

### Set of rules that are being applied in `.linthtmlrc.json` file

1) attr-bans
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
2) attr-name-ignore-regex
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
3) attr-name-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
4) attr-new-line
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
5) attr-no-dup
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
6) attr-no-unsafe-char
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
7) attr-order
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
8) attr-quote-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
9) attr-req-value
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
10) attr-validate
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
11) button-req-content
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
12) class-no-dup
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
13) class-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
14) doctype-first
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
15) doctype-html5
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
16) fieldset-contains-legend
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
17) fig-req-figcaption
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
18) focusable-tabindex-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
19) head-req-title
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
20) head-valid-content-model
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
21) href-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
22) html-req-lang
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
23) html-valid-content-model
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
24) id-class-ignore-regex
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
25) id-class-no-ad
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
26) id-class-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
27) id-no-dup
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
28) id-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
29) img-req-alt
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
30) img-req-src
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
31) indent-delta
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
32) indent-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
33) indent-width-cont
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
34) indent-width
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
35) input-btn-req-value-or-title
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
36) input-radio-req-name
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
37) input-req-label
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
38) label-no-enc-textarea-or-select
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
39) label-req-for
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
40) lang-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
41) line-end-style
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
42) line-max-len-ignore-regex
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
43) line-max-len
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
44) line-no-trailing-whitespace
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
45) link-min-length-4
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
46) link-req-noopener
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
47) no-surrounding-whitespace
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
48) spec-char-escape
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
49) table-req-caption
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
50) table-req-header
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
51) tag-bans
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
52) tag-close
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
53) tag-name-lowercase
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
54) tag-name-match
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
55) tag-req-attr
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
56) tag-self-close
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
57) text-ignore-regex
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
58) title-max-len
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file
59) title-no-dup
	* [X] ~~*HTML Example of Good & Bad code noted in html test file*~~ [2021-11-15]
	* [X] ~~*Rule applied in `.linthtmlrc` file*~~ [2021-11-15]
	* [ ] Rule tested in html test file


## Stylelint

### Ignore File

* [X] ~~*Create a `.stylelintignore` file*~~ [2021-11-16]
* [ ] Currently added css files to be ignored, need to remove this at the end of finalization
* [X] ~~*Added JS files ignore so this doesn't  lint those files*~~ [2021-11-16]

### CSS Linting

* [X] ~~*Install Stylelint extension for VSCode*~~ [2021-11-15]
* [X] ~~*install npm package called ***stylelint-config-standard*** using command `npm install --save-dev stylelint stylelint-config-standard`*~~ [2021-11-16]
* [X] ~~*Add this package to `.stylelintrc.json` configuration file*~~ [2021-11-16]
``` json
{
  "extends": "stylelint-config-standard"
}
```

### SCSS / PostCSS Syntax / Other linting


### Stylelint Rules

These are the set of rules that have been applied in the `.stylelintrc.json` file accordint to the required fields by the Stylelint documentation.

## ESLint

* [ ] Create eslintrc file.
* [ ] Install [Eslint Config Prettier](https://github.com/prettier/eslint-config-prettier#installation)
* [ ] Configure Eslint Config Prettier so that it doesn't conflicts with prettier configurations.
* [ ] Set execution policy to unrestricted using this powershell command in Administrator mode `Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy Unrestricted` at [this link](https://stackoverflow.com/questions/41117421/ps1-cannot-be-loaded-because-running-scripts-is-disabled-on-this-system)


## PHPCS & PHPCBF

### Composer

* [X] ~~*Install Composer*~~ [2021-11-17]
* [X] ~~*Install composer reuired packages*~~ [2021-11-17]

### Adding Composer Packages Globally

* [X] ~~*PHP_CodeSniffer - `composer global require "squizlabs/php_codesniffer=*"`*~~ [2021-11-17]
* [X] ~~*WordPress Coding Standards - `composer global require "wp-coding-standards/wpcs=*"`*~~ [2021-11-17]
* [X] ~~*PHPCompatibility - `composer global require "phpcompatibility/phpcompatibility-wp=*"`*~~ [2021-11-17]
* [X] ~~*Code Sniffer Composer - `composer global require "dealerdirect/phpcodesniffer-composer-installer=*"`*~~ [2021-11-17]
* [X] ~~*WPThemeReview Standard for PHP_CodeSniffer - `composer global require wptrt/wpthemereview dealerdirect/phpcodesniffer-composer-installer=*"`*~~ [2021-11-17]
* The output should look like this.
```
The installed coding standards are MySource, PEAR, PSR1, PSR12, PSR2, Squiz, Zend, PHPCompatibility, PHPCompatibilityParagonieRandomCompat, PHPCompatibilityParagonieSodiumCompat, PHPCompatibilityWP, WordPress, WordPress-Core, WordPress-Docs, WordPress-Extra and WPThemeReview
```

## Theme Sniffer WP Plugin

* [X] ~~*Install the plugin using this [Github repo](https://github.com/WPTT/theme-sniffer#installation---development)*~~ [2021-11-17]
* [X] ~~*Run the tests from the plugin*~~ [2021-11-17]
