// Program to find 4 subject marks

#include <stdio.h>

int main(){
    int maths, computer, science, english, total_marks;
    float percent;
    printf("Maths = ");
    scanf("%d", maths);
    printf("Computer = ");
    scanf("%d", computer);
    printf("Science = ");
    scanf("%d", science);
    printf("English = ");
    scanf("%d", english);

    total_marks = maths + computer + science + english;
    percent = total_marks * 100 / 400;

    printf("You Got %f percent", percent);
}