import json
import re


def parseText(filename=None):

    returnList = []

    with open(filename, "r") as filein:
        content = filein.readlines()
        content = "".join(content)
    
    index = 0
    qstrings = re.split("Q\d+", content)
    for qstring in qstrings:
        if qstring:
            index += 1
            qstr = qstring.replace("\n", " ")
            spectrum = qstr.split("1 2 3 4 5")
            choice0 = spectrum[0].strip()
            choice1 = spectrum[1].strip()
            returnList.append((choice0, choice1))

    return returnList


if __name__ == "__main__":

    outList = []

    for choice in parseText("oejts_questions_-_v1.2.txt"):
        print("{} - {}".format(choice[0], choice[1]))
        newItem = (choice[0], choice[1])
        outList.append(newItem)

    with open("oejts_questions.json", "w") as outfile:
        outfile.write(json.dumps(outList))

