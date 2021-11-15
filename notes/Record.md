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

* FIXME:
* [ ] Trailing space for all MD Files should not be present - It is managed at 2 places, EditorConfig file and VSCode settings ("files.trimTrailingWhitespace": false) .

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

## Ligatures

* [X] ~~*Firacode font is used so that if you want `===` to look more like `≡`, `>=` to look more like `⩾`, or `!==` to look more like `≠`. [FiraCode Github](https://github.com/tonsky/FiraCode)*~~ [2021-11-11]


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


## Matching Bracket Colours

* [X] ~~*[Bracket Pair Colorizer 2](https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer-2)When you have a lot of parentheses, square brackets and braces, it can be difficult to see where each block of code opens and closes. The Bracket Pair Colorizer by Coenraads solves this problem.*~~ [2021-11-11]

## HTML Lint

* [X] ~~*Add [LintHTML plugin](https://marketplace.visualstudio.com/items?itemName=kamikillerto.vscode-linthtml) to VSCode*~~ [2021-11-11]
* [X] ~~*Add `@linthtml/linthtml` using npm packages and saving it into package.json file.  `npm install @linthtml/linthtml --save-dev`*~~ [2021-11-11]
* [X] ~~*Add `.linthtmlrc` file to project using:*~~ [2021-11-11]
  * npx linthtml --init
  * Javsscript
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
