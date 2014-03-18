# Emoji

Common emoticons and the corresponding Emoji as defined in Unicode

## Emoticons and Unicode

| Emoticon                                      | Emoji                        | Unicode   | Description                                |
| :-------------------------------------------: | :--------------------------: | --------: | :----------------------------------------- |
| `:-)` or `:)`                                 | 😊 | `U+1F60A` | SMILING FACE WITH SMILING EYES             |
| `:-(` or `:(`                                 | 😞 | `U+1F61E` | DISAPPOINTED FACE                          |
| `:-D` or `:D`                                 | 😃 | `U+1F603` | SMILING FACE WITH OPEN MOUTH               |
| `;-)` or `;)`                                 | 😉 | `U+1F609` | WINKING FACE                               |
| `:-P` or `:P`                                 | 😜 | `U+1F61C` | FACE WITH STUCK-OUT TONGUE AND WINKING EYE |
| `:-*` or `:*`                                 | 😘 | `U+1F618` | FACE THROWING A KISS                       |
| <code>&lt;3</code> or `:3`                    | ❤  | `U+2764`  | HEAVY BLACK HEART                          |
| <code>&gt;:[</code>                           | 😡 | `U+1F621` | POUTING FACE                               |
| <code>:'&#124;</code>                         | 😥 | `U+1F625` | DISAPPOINTED BUT RELIEVED FACE             |
| `:-[`                                         | 😩 | `U+1F629` | WEARY FACE                                 |
| `:'(`                                         | 😭 | `U+1F62D` | LOUDLY CRYING FACE                         |
| `=O`                                          | 😱 | `U+1F631` | FACE SCREAMING IN FEAR                     |
| `xD`                                          | 😁 | `U+1F601` | GRINNING FACE WITH SMILING EYES            |
| `:')`                                         | 😂 | `U+1F602` | FACE WITH TEARS OF JOY                     |
| `:-/` or `:/`                                 | 😒 | `U+1F612` | UNAMUSED FACE                              |
| <code>:-&#124;</code> or <code>:&#124;</code> | 😔 | `U+1F614` | PENSIVE FACE                               |
| `*_*`                                         | 😍 | `U+1F60D` | SMILING FACE WITH HEART-SHAPED EYES        |

## System requirements

Emoji require a character encoding that can represent the specific characters from the Unicode character set. Common examples are UTF-8 and UTF-16.

UTF-16 uses 2 bytes for all characters in the Basic Multilingual Plane (BMP) which includes all code points up to U+FFFF. For characters above that code point, it uses 4 bytes (non-BMP).

GSM text messages (SMS) must be encoded in UTF-16 (70 chars limit) instead of the GSM 7-bit alphabet (160 chars limit) if you want to use Emoji. Non-BMP characters consume 2 of the 70 characters each.

In Java, only BMP characters fit into a single `char`. `Character.toChars(...)` returns `char[]` with a size of 1 for BMP characters and 2 for non-BMP characters.

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