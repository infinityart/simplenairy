# simplenairy
## Dictionary
To initiate the dictionary, use the following code.

```PHP 
$dictionary = new \Infsim\Dictionary(); 
```

To add a new word to the dictionary use the following function:

```PHP 
$dictionary->addWord($word, $language, $translatedWord);
```

```$word``` Is an english word (example: 'i').  
```$language``` Is the language of the third parameter (example: 'dutch').  
```$translatedWord``` Is the translated word of the first parameter($word) (example: 'ik').  
## Translator

To initiate the translator use the following code.

```php
$translator = new \Infsim\Translator($dictionary, $language);
```

```$dictionary``` Is the dictionary you created before.  
```$language``` Is the language the translator uses for translating a word or sentence (example: 'dutch').

Now it's time for the part you've all been waiting for.  
To translate a word or sentence use the follow code. (DONT USE ....

to be continued
