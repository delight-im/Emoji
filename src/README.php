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

?>
<?php header('Content-type: text/html; charset=utf-8'); ?>
# Emoji

Common emoticons and the corresponding Emoji as defined in Unicode

## Emoticons and Unicode

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

## System requirements

### Charsets

Emoji require a character encoding that can represent the specific characters from the Unicode character set. Common examples are UTF-8 and UTF-16.

UTF-16 uses 2 bytes for all characters in the Basic Multilingual Plane (BMP) which includes all code points up to U+FFFF. For characters above that code point, it uses 4 bytes (non-BMP).

### GSM (SMS)

GSM text messages (SMS) must be encoded in UTF-16 (70 chars limit) instead of the GSM 7-bit alphabet (160 chars limit) if you want to use Emoji. Non-BMP characters consume 2 of the 70 characters each.

### Java

In Java, only BMP characters fit into a single `char`. `Character.toChars(...)` returns `char[]` with a size of 1 for BMP characters and 2 for non-BMP characters.

### MySQL

On MySQL 5.5.3+, you have to use the `utf8mb4` encoding instead of `utf8` because it introduces support for non-BMP characters. Prior to that MySQL version, you would have to use a `BLOB` instead, for example.

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