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
// Smiling face 😊 is shown
````

## Replacements

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