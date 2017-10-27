#!/bin/bash

. "$HOME/.nvm/nvm.sh"
{
  cd src
  ./make-from-partials
}
gulp dist

