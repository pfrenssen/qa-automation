<?php

class QualityAssurance_Sniffs_Generic_HardcodedPath_HardcodedPathUnitTest extends CoderSniffUnitTest
{

    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getErrorList($testFile)
    {
      // All the error-free  files have no errors.
      return (strpos($testFile, 'error-free') !== false) ? [] : [55 => 1];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getWarningList($testFile)
    {
      // All the warning-free  files have no warnings.
      return (strpos($testFile, 'warning-free') !== false) ? [] : [1 => 1];

    }//end getWarningList()


    /**
     * Returns a list of test files that should be checked.
     *
     * The key of the array should represent the file that should be tested.
     * The value of the array represents the fixed file to compare against.
     *
     * @return array('fileToTest" => 'fixedFile')
     */
    public function getTestFiles() {
        return array(
          'HardcodedPath.tpl.php' => '',
        );
    }// end getTestFiles()


}//end class
