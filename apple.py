import nltk
import sys
path = sys.argv[1]
from nltk.tokenize import word_tokenize
file1 = open(path + "data.txt", "r")
file2 = open(path + "taggedSentence.txt", "a+")
shortcake = str(file1.read())
usertext = word_tokenize(shortcake)
taggedsentence =(nltk.pos_tag(usertext))
file2.write(str(taggedsentence))
file1.close()
file2.close()
