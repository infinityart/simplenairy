<?php
/**
 * @author: Jonty Sponselee <jsponselee@student.scalda.nl>
 * @since: 6/7/2018
 */

require __DIR__ . '/vendor/autoload.php';

$dictionary = new \Infsim\Dictionary();

$dictionary->addWord('and', 'dutch', 'en');
$dictionary->addWord('i', 'dutch', 'ik');
$dictionary->addWord('am', 'dutch', 'ben');
$dictionary->addWord('happy', 'dutch', 'blij');
$dictionary->addWord('sad', 'dutch', 'verdrietig');

$dictionary->addWord('and', 'french', 'et');
$dictionary->addWord('i', 'french', 'je');
$dictionary->addWord('am', 'french', 'suis');
$dictionary->addWord('happy', 'french', 'content');
$dictionary->addWord('sad', 'french', 'triste');

$translator = new \Infsim\Translator($dictionary, 'dutch');

echo $translator->translate('123 angry');
echo '<br>';
echo $translator->translate('123');
echo '<br>';
echo $translator->translate('angry');
echo '<br>';
echo $translator->translate('i am happy and sad');
echo '<br>';
echo $translator->translate('am i sad and happy');

$translator->setLanguage('french');

echo '<br>';
echo '<br>';
echo $translator->translate('123 angry');
echo '<br>';
echo $translator->translate('123');
echo '<br>';
echo $translator->translate('angry');
echo '<br>';
echo $translator->translate('i am happy and sad');
echo '<br>';
echo $translator->translate('am i sad and happy');