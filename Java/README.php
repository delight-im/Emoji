<?php

/**
 * Copyright 2014 www.delight.im <info@delight.im>
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Returns the UTF-8 representation of the given Unicode codepoint
 * 
 * @param int $c the hexadecimal Unicode codepoint
 * @throws Exception if the given codepoint could not be represented in UTF-8
 * 
 * @author velcrow (Stack Overflow)
 */
function utf8($c) {
	if ($c <= 0x7F) {
		return chr($c);
	}
	if ($c <= 0x7FF) {
		return chr(($c>>6)+192).chr(($c&63)+128);
	}
	if ($c <= 0xFFFF) {
		return chr(($c>>12)+224).chr((($c>>6)&63)+128).chr(($c&63)+128);
	}
	if ($c <= 0x1FFFFF) {
		return chr(($c>>18)+240).chr((($c>>12)&63)+128).chr((($c>>6)&63)+128).chr(($c&63)+128);
	}
	else {
		throw new Exception('Could not represent in UTF-8: '.$c);
	}
}

header('Content-type: text/html; charset=utf-8');

?>
# Emoji for Java

Replaces emoticons such as `:-)` with their corresponding Unicode emoji.

This allows for a graphical representation of the symbols, e.g. through bitmap graphics or emoji fonts.

## Installation

 * Copy `Emoji.java` to your project

## Usage

````
String myString;

myString = "Smiling face :-) is shown";
// Smiling face :-) is shown

myString = Emoji.replaceInText(myString);
// Smiling face <?php echo utf8(0x1F60A); ?> is shown
````

## Replacements

| Emoticon                                      | Emoji                        | Unicode   | Description                                |
| :-------------------------------------------: | :--------------------------: | --------: | :----------------------------------------- |
| `:-)` or `:)`                                 | <?php echo utf8(0x1F60A); ?> | `U+1F60A` | SMILING FACE WITH SMILING EYES             |
| `:-(` or `:(`                                 | <?php echo utf8(0x1F61E); ?> | `U+1F61E` | DISAPPOINTED FACE                          |
| `:-D` or `:D`                                 | <?php echo utf8(0x1F603); ?> | `U+1F603` | SMILING FACE WITH OPEN MOUTH               |
| `;-)` or `;)`                                 | <?php echo utf8(0x1F609); ?> | `U+1F609` | WINKING FACE                               |
| `:-P` or `:P`                                 | <?php echo utf8(0x1F61C); ?> | `U+1F61C` | FACE WITH STUCK-OUT TONGUE AND WINKING EYE |
| `:-*` or `:*`                                 | <?php echo utf8(0x1F618); ?> | `U+1F618` | FACE THROWING A KISS                       |
| <code>&lt;3</code> or `:3`                    | <?php echo utf8(0x2764); ?>  | `U+2764`  | HEAVY BLACK HEART                          |
| <code>&gt;:[</code>                           | <?php echo utf8(0x1F621); ?> | `U+1F621` | POUTING FACE                               |
| <code>:'&#124;</code>                         | <?php echo utf8(0x1F625); ?> | `U+1F625` | DISAPPOINTED BUT RELIEVED FACE             |
| `:-[`                                         | <?php echo utf8(0x1F629); ?> | `U+1F629` | WEARY FACE                                 |
| `:'(`                                         | <?php echo utf8(0x1F62D); ?> | `U+1F62D` | LOUDLY CRYING FACE                         |
| `=O`                                          | <?php echo utf8(0x1F631); ?> | `U+1F631` | FACE SCREAMING IN FEAR                     |
| `xD`                                          | <?php echo utf8(0x1F601); ?> | `U+1F601` | GRINNING FACE WITH SMILING EYES            |
| `:')`                                         | <?php echo utf8(0x1F602); ?> | `U+1F602` | FACE WITH TEARS OF JOY                     |
| `:-/` or `:/`                                 | <?php echo utf8(0x1F612); ?> | `U+1F612` | UNAMUSED FACE                              |
| <code>:-&#124;</code> or <code>:&#124;</code> | <?php echo utf8(0x1F614); ?> | `U+1F614` | PENSIVE FACE                               |
| `*_*`                                         | <?php echo utf8(0x1F60D); ?> | `U+1F60D` | SMILING FACE WITH HEART-SHAPED EYES        |

## License

```
Copyright 2014 www.delight.im <info@delight.im>

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```