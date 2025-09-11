<?php

class __Mustache_d2ebd845235ed440f0470223d6e75d01 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('hassocials');
        $buffer .= $this->section4f5b550a47a49e47a51744b54b44b7b0($context, $indent, $value);

        return $buffer;
    }

    private function section4f5b550a47a49e47a51744b54b44b7b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="socials-lambda">
	
	<div class="socials row">
		<div class="col-md-6">
        	<div class="social_contact">
				{{{ output.lambda2_socials_links }}}
			</div>
		</div>
		<div class="col-md-6">
        	<div class="social_icons pull-right">
				{{{ output.lambda2_socials_icons }}}
			</div>
		</div>
	</div>
	
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="socials-lambda">
';
                $buffer .= $indent . '	
';
                $buffer .= $indent . '	<div class="socials row">
';
                $buffer .= $indent . '		<div class="col-md-6">
';
                $buffer .= $indent . '        	<div class="social_contact">
';
                $buffer .= $indent . '				';
                $value = $this->resolveValue($context->findDot('output.lambda2_socials_links'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<div class="col-md-6">
';
                $buffer .= $indent . '        	<div class="social_icons pull-right">
';
                $buffer .= $indent . '				';
                $value = $this->resolveValue($context->findDot('output.lambda2_socials_icons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '	
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
