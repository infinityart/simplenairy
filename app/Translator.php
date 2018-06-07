<?php
/**
 * Class Translator.php
 *
 * Class documentation
 *
 * @author: Jonty Sponsleee <jsponselee@student.scalda.nl>
 * @since: 07/06/2018
 * @version 0.1 07/06/2018 Initial class definition.
 */

namespace Infsim;


class Translator
{
    /**
     * @var array
     */
    private $dictionary;

    /**
     * @var string
     */
    private $language;

    /**
     * Translator constructor.
     * @param Dictionary $dictionary
     * @param string $language
     */
    public function __construct(Dictionary $dictionary, string $language = 'english')
    {
        $this->dictionary = $dictionary->getDictionary();
        $this->language = $language;
    }

    /**
     * Translate the given parameter.
     *
     * @param string $word
     * @return mixed
     * @throws \Exception
     */
    public function translate(string $word)
    {
        try {
            $words = explode(' ', $word);

            if(count($words) > 1){
                return $this->translateSentence($words);
            }
            return $this->getWord($word);
        } catch (\Exception $e) {
            echo 'The word "' . $e->getTrace()[0]['args'][0] . "\" doesn't exist for the dictionary \"" . $this->language . '".';
        }
    }

    /**
     * Translate a sentence.
     *
     * @param array $words
     * @return string
     * @throws \Exception
     */
    private function translateSentence(array $words){
        foreach ($words as $idx => $word){
            $words[$idx] = $this->getWord($word);
        }
        return implode(' ', $words);
    }

    /**
     * Get a word from the dictionary.
     *
     * @param string $word
     * @return mixed
     * @throws \Exception
     */
    private function getWord(string $word ){
        $dictionary = $this->dictionary;
        $language = $this->language;

        $a = substr($word, 0, 1);
        $ab = substr($word, 0, 2);

        if (isset($dictionary[$a][$ab][$word][$language])) {
            return $dictionary[$a][$ab][$word][$language];
        }

        throw new \Exception();
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }
}