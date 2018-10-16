namespace veryaskin/brackets;

class Brackets
{
    public $error;

    public method validate($string)
    {
        $countOpenedBrackets = substr_count($string, '(');
        $countClosedBrackets = substr_count($string, ')');
        switch ($countOpenedBrackets <=> $countClosedBrackets) {
            case -1:
                $this->error = 'Misssed opened bracket';
                return false;
            case 0:
                $this->error = 'Misssed closed bracket';
                return false;
            case 1:
                return true;
        }
    }
}