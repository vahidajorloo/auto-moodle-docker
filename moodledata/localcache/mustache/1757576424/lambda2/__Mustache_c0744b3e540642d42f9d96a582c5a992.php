<?php

class __Mustache_c0744b3e540642d42f9d96a582c5a992 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<header id="main-header" class="clearfix top socials">
';
        $buffer .= $indent . '
';
        $value = $context->find('socialsheader');
        $buffer .= $this->sectionA723a824084ef6bea27a984f72b03134($context, $indent, $value);
        $buffer .= $indent . '	
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav class="lambda-nav style-2 navbar fixed-top navbar-expand" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-flex align-items-center m-0 mr-4 p-0 aabtn">
';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section9f14c48cc0774962c3c438c71ef64fbf($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-none d-md-flex w-100">
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section2607ff0e83e055c1736594865f86d35b($context, $indent, $value);
        $buffer .= $indent . '        <ul class="navbar-nav my-1 px-1">
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <div id="usernavigation" class="navbar-nav ml-auto">
';
        $value = $context->find('shownavbarsearch');
        $buffer .= $this->sectionB7a6f4a85de5570e64fe72a0e4edd521($context, $indent, $value);
        $value = $context->find('logged_in');
        $buffer .= $this->sectionAd90993c8c6d2a6a0a03b8c110f87688($context, $indent, $value);
        $value = $context->find('logged_in');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.lambda2loginbutton'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="d-flex d-md-none align-items-center ml-auto">
';
        $value = $context->find('logged_in');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('output.lambda2loginbutton'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        <button class="mobile-menu-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon data-bs-toggle="collapse" data-bs-target="#mobile-menu-collapse" aria-expanded="false" aria-controls="mobile-menu-collapse"></button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mobile-menu d-block d-md-none">
';
        $buffer .= $indent . '    <nav class="navbar mobile-menu w-100 collapse" id="mobile-menu-collapse">
';
        $value = $context->find('logged_in');
        $buffer .= $this->section0816c616b26a310fdf9de34c50d9bb1b($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.lambda2mobilemenuitems'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="nav-sub">
';
        $value = $context->find('logged_in');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->findDot('output.lambda2loginmodal'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA723a824084ef6bea27a984f72b03134(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{>theme_lambda2/includes/socials}}
	';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/socials')) {
                    $buffer .= $partial->renderInternal($context, $indent . '		');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f14c48cc0774962c3c438c71ef64fbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img src="{{output.get_compact_logo_url}}" class="logo mr-1" alt="{{sitename}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo mr-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c7d6d6aab86e2a75f65f8efa41ccd69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_lambda2/includes/language_menu}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2607ff0e83e055c1736594865f86d35b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="primary-navigation">
                {{> core/moremenu}}
            </div>
            {{#langmenu}}
                {{> theme_lambda2/includes/language_menu}}
            {{/langmenu}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $value = $context->find('langmenu');
                $buffer .= $this->section8c7d6d6aab86e2a75f65f8efa41ccd69($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7a6f4a85de5570e64fe72a0e4edd521(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="search-margin"></div>
                    <div class="lambda-search-bar">
                        {{{ output.lambdasearch }}}
                    </div>
                <div class="divider border-left h-75 align-self-center mx-1"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="search-margin"></div>
';
                $buffer .= $indent . '                    <div class="lambda-search-bar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.lambdasearch'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6ae3107dbc57e9d1fa9c88b00f926bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/user_menu }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd90993c8c6d2a6a0a03b8c110f87688(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ output.navbar_plugin_output }}}
                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                    {{#usermenu}}
                        {{> core/user_menu }}
                    {{/usermenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
                $value = $context->find('usermenu');
                $buffer .= $this->sectionD6ae3107dbc57e9d1fa9c88b00f926bd($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0816c616b26a310fdf9de34c50d9bb1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="mobile-menu-top-border"></div>
            <div class="mobile-menu-top">
                {{{ output.lambda2mobileplugin_output }}}
                <div class="d-flex usermenu-container" data-region="usermenu">
                    {{#usermenu}}
                        {{> core/user_menu }}
                    {{/usermenu}}
                </div>
            </div>
            <div class="mobile-menu-top-border"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="mobile-menu-top-border"></div>
';
                $buffer .= $indent . '            <div class="mobile-menu-top">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.lambda2mobileplugin_output'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="d-flex usermenu-container" data-region="usermenu">
';
                $value = $context->find('usermenu');
                $buffer .= $this->sectionD6ae3107dbc57e9d1fa9c88b00f926bd($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="mobile-menu-top-border"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
