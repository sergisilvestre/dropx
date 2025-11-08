import { User } from "@/domain/entities/User";

export interface AuthRepository {
  login(email: string, password: string): Promise<User>;
}
