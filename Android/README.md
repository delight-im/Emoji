# AndroidEmoji

Emoji support for Android down to API level 8 (Android 2.2)

## The problem

Android 4.1.1 (Jelly Bean) introduced `AndroidEmoji.ttf` as a fallback font to display emoji symbols from Unicode 6.0.

Android 4.4 (KitKat) added `NotoColorEmoji.ttf` as a new emoji font.

Thus all Android versions prior to Android 4.1.1 do not display emoji at all.

## The solution

When you call `AndroidEmoji.ensure(...)` from this library on a string, it makes sure that the emoji contained in the string will be displayed correctly on all Android versions. This is done by setting a custom font for the single emoji symbols in the text.

## Installation

 * Copy `assets` to your Android project's `assets` directory
 * Copy `src` to your Android project's `src` directory

## Usage

```
String myString;
TextView myTextView;
...
myTextView.setText(AndroidEmoji.ensure(myString));
```

## Known issues

 * Even with this library, your app cannot display emoji that are not in the [EmojiSources.txt](http://www.unicode.org/Public/UNIDATA/EmojiSources.txt) file. This is normal behaviour for Android versions prior to 4.4 (KitKat), however, because `AndroidEmoji.ttf` does not contain newer emoji.

## Third-party components

 * [AndroidEmoji.ttf](https://github.com/android/platform_frameworks_base/blob/514bdc3b6e62240ff4df686a7844d5ecdd9a0a66/data/fonts/AndroidEmoji.ttf) by The Android Open Source Project ([Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0))

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