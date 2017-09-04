<?php
/**
 * PHP dbwebb class for asserting and auto correcting labs.
 *
 * It reads the answers from a json-file and use it
 * for checking with assertEqual().
 *
 */
class Dbwebb
{
    const PROMPT = ">>> ";

    /**
     * Constructor, init by reading json-file with answers.
     *
     */
    public function __construct()
    {
        $this->answers = json_decode(file_get_contents(".answer.json"), true);
        $this->correct = 0;
        $this->failed  = 0;
        $this->notDone = 0;
        $this->points  = 0;
        $this->jsonOptions = JSON_PRETTY_PRINT;

        if (php_sapi_name() == "cli") {
            $this->pre    = null;
            $this->preEnd = "\n";
            $this->colorBlue   = "\033[96m";
            $this->colorGreen  = "\033[92m";
            $this->colorYellow = "\033[93m";
            $this->colorStop   = "\033[0m";
        } else {
            $this->pre    = "<pre>";
            $this->preEnd = "</pre>";
            $this->colorBlue   = "<span style='color: #0296ff'>";
            $this->colorGreen  = "<span style='color: #006400'>";
            $this->colorYellow = "<span style='color: #FF8C00'>";
            $this->colorStop   = "</span>";

        }

        echo "{$this->pre}" . self::PROMPT . "Ready to begin.\n";
    }



    /**
     * Check if the answer is correct or not, present a hint if asked for.
     *
     * @param string  $question the id of the question
     * @param mixed   $answer   the answer to test
     * @param boolean $hint     true to show a hint, false to not (default)
     *
     * @return string representing if the answer was correct or not
     */
    public function assertEqual($question, $answer, $hint = false)
    {
        $status   = null;
        $noanswer = "Replace this text with the variable holding the answer.";
        $correct  = $this->answers["answers"][$question];

        if ($answer === $noanswer) {

            $status = self::PROMPT . $question . " NOT YET DONE.";
            $this->notDone += 1;

        } elseif ($answer === $correct) {

            $status = self::PROMPT . $question . " CORRECT. Well done!\n"
                . json_encode($answer, $this->jsonOptions);
            $this->correct += 1;
            $this->points += isset($this->answers["points"][$question])
                ? $this->answers["points"][$question]
                : 0;

        } else {

            $status = self::PROMPT . $question . " FAIL.\n" . self::PROMPT . "You said:\n"
                . json_encode($answer, $this->jsonOptions)
                . " (" . gettype($answer) . ")";
            $status .= $hint
                ? "\n" . self::PROMPT . "Hint:\n" . json_encode($correct) . " (" . gettype($correct) . ")"
                : "";
            $this->failed += 1;

        }

        return $status . "\n";
    }



    /**
     * Print a exit message with the result of all tests.
     *
     * @return boolean true if all answers are correct, else false
     */
    public function exitWithSummary()
    {
        $questions    = $this->answers["summary"]["questions"];
        $points       = $this->answers["summary"]["points"];
        $pass         = $this->answers["summary"]["pass"];
        $passDistinct = $this->answers["summary"]["passdistinct"];

        echo self::PROMPT
            . "Done with status {$questions}/{$this->correct}/{$this->failed}/"
            . "{$this->notDone} (Total/Correct/Failed/Not done).\n";

        $withDistinct = "";
        if (!is_null($passDistinct)) {
            $withDistinct = ", PASS W DISTINCTION=>{$passDistinct}p";
        }

        if ($pass) {
            echo self::PROMPT
                . "Points earned: {$this->points}p of {$points}p"
                . " (PASS=>{$pass}p{$withDistinct}).\n";
        }

        // Check if pass, pass w distinction or not
        $didPass = $this->correct == $questions;
        if ($pass) {
            $didPass = $this->points >= $pass;
        }

        $didPassDistinct = null;
        if ($passDistinct) {
            $didPassDistinct = $this->points >= $passDistinct;
        }

        if ($didPassDistinct) {
            echo $this->colorBlue
                . self::PROMPT
                . "Grade: PASS WITH DISTINCTION!!! :-D"
                . $this->colorStop;
        } elseif ($didPass) {
            echo $this->colorGreen
                . self::PROMPT
                . "Grade: PASS! :-)"
                . $this->colorStop;
        } else {
            echo $this->colorYellow
                . self::PROMPT
                . "Grade: Thou Did Not Pass. :-|"
                . $this->colorStop;
        }
        echo $this->preEnd;
        return $didPass ? 0 : 42;
    }
}
