import nltk
from nltk.tokenize import word_tokenize
file1 = open("C:/xampp/htdocs/WebInput.txt", "r")
file2 = open("C:\/xampp/htdocs/TaggedSentence.txt", "w")
shortcake = str(file1.read())
usertext = word_tokenize(shortcake)
taggedsentence =(nltk.pos_tag(usertext))
file2.write(str(taggedsentence))
file1.close()
file2.close()
