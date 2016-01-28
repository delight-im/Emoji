# Emoji

 * [`Android`](Android/): provides support for Unicode emoji with backwards-compatibility down to Android 2.2
 * [`Java`](Java/): converts emoticons to their corresponding Unicode emoji

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
Copyright (c) delight.im <info@delight.im>

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