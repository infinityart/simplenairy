<?php
/**
 * Class Dictionary.php
 *
 * This class is used for manipulating the dictionary.
 *
 * @author: Jonty Sponsleee <jonty_wolf@hotmail.com>
 * @since: 07/06/2018
 * @version 0.1 07/06/2018 Initial class definition.
 */

namespace Infsim;


class Dictionary
{
    /**
     * @var array
     */
    private $dictionary = [];

    /**
     * Set a new word into the dictionary
     *
     * @param string $word
     * @param string $language
     * @param string $translatedWord
     */
    public function addWord(string $word, string $language, string $translatedWord)
    {
        $a = substr($word, 0, 1);
        $ab = substr($word, 0, 2);

        $this->dictionary[$a][$ab][$word][$language] = $translatedWord;
    }

    /**
     * @return array
     */
    public function getDictionary():array
    {
        return $this->dictionary;
    }
}